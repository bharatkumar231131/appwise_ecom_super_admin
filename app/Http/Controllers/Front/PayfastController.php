<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageBuy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\PayFastLog;

class PayfastController extends Controller
{
    public function payFast(Request $request)
    {
        $package_id = $request->package_id;
        $package_name = $request->package_name;
        $price = $request->price;
        $owner_id = $request->owner_id;
    
        Session::put('payfast_data', [
            'package_id' => $package_id,
            'package_name' => $package_name,
            'price' => $price,
            'owner_id' => $owner_id
        ]);
    
        $merchant_id = '10000100';
        $merchant_key = '46f0cd694581a';
    
        $return_url = route('payfastsuccess');
        $cancel_url = route('payfastcancel');
        $notify_url = route('payfastnotify');
    
        $data = [
            'merchant_id' => $merchant_id,
            'merchant_key' => $merchant_key,
            'return_url' => $return_url,
            'cancel_url' => $cancel_url,
            'notify_url' => $notify_url,
            'name_first' => Auth::user()->name,
            'name_last' => Auth::user()->name,
            'email_address' => Auth::user()->email,
            'm_payment_id' => $package_id,
            'amount' => number_format($price, 2, '.', ''),
            'item_name' => $package_name,
        ];
    
        PayFastLog::create([
            'logs' => 'PayFast Payment Initiated',
            'data' => json_encode($data),
        ]);
    
        $htmlForm = '<form action="https://sandbox.payfast.co.za/eng/process" method="post" name="payfastform">';
        foreach ($data as $name => $value) {
            $htmlForm .= '<input name="' . $name . '" type="hidden" value="' . $value . '" />';
        }
        $htmlForm .= '</form>';
    
        return view('front.payfast.form', compact('htmlForm'));
    }
    
    public function payFastSuccess(Request $request)
    {
        $payfastData = Session::get('payfast_data');
        PayFastLog::create([
            'logs' => 'PayFast Payment Success',
            'data' => json_encode($request->all())
        ]);
    
        if (!$payfastData) {
            return view('front.payment_error', ['message' => 'Payment data not found.']);
        }

        $package = Package::where('id', '=', $payfastData['package_id'] )->first(); 
        PackageBuy::create([
            'package_id' => $payfastData['package_id'],  
            'shop_owner_id' => $payfastData['owner_id'],
            'package_name' => $payfastData['package_name'],  
            'price' => $payfastData['price'],
            'number_of_section' => $package['number_of_section'],
            'number_of_category' => $package['number_of_category'],
            'number_of_product' => $package['number_of_product'],
            'days' => $package['days'],
            'status' => 'active',
            'payment_method' => "PayFast",
        ]);
    
        return view('front.payment_success', ['message' => 'Payment successful!']);
    }
    


    public function payFastCancel(Request $request)
    {
        PayFastLog::create([
            'logs' => 'PayFast Payment Cancelled',
            'data' => json_encode($request->all())
        ]);

        return view('front.payment_cancelled', ['message' => 'Payment was cancelled.']);
    }


    public function payFastNotify(Request $request)
    {
        PayFastLog::create([
            'logs' => 'PayFast Payment Notification',
            'data' => json_encode($request->all())
        ]);

        return response()->json(['status' => 'success']);
    }
}
