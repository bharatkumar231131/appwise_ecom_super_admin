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
            'm_payment_id' => $package_id, // Unique Payment ID (could be order or package ID)
            'amount' => number_format($price, 2, '.', ''),
            'item_name' => $package_name, // Package name passed dynamically
        ];

        // Log the PayFast data for debugging purposes (optional)
        PayFastLog::create([
            'logs' => 'PayFast Payment Initiated',
            'data' => json_encode($data),
        ]);

        // Create the HTML form to submit the payment to PayFast
        $htmlForm = '<form action="https://sandbox.payfast.co.za/eng/process" method="post" name="payfastform">';
        foreach ($data as $name => $value) {
            $htmlForm .= '<input name="' . $name . '" type="hidden" value="' . $value . '" />';
        }
        $htmlForm .= '</form>';

        // Return the PayFast form view with the dynamically created form
        return view('front.payfast.form', compact('htmlForm'));
    }

    public function payFastSuccess(Request $request)
{
    // Log the PayFast payment success for debugging purposes
    PayFastLog::create([
        'logs' => 'PayFast Payment Success',
        'data' => json_encode($request->all())
    ]);

    // Find the package using the passed $id
    $package = Package::get();

    if (!$package) {
        return view('front.payment_error', ['message' => 'Package not found.']);
    }

    // Extract the payment details from the request
    $package_id = $request->m_payment_id;  // Assuming m_payment_id is the package ID
    $payment_status = 'success';  // Payment status from PayFast (successful)
    $transaction_id = $request->pf_payment_id;  // PayFast transaction ID
    $amount = $request->amount_gross;  // Gross amount paid
    $user_id = Auth::user()->id;  // Current authenticated user's ID
    $payment_method = 'payfast';  // Payment method is PayFast

    // Insert the data into the package_buy table
    PackageBuy::create([
        'user_id' => $user_id,
        'package_id' => $id,  // Use the ID passed in the URL
        'shop_owner_id' => $request->owner_id,
        'package_name' => $request->item_name,  // Assuming item_name is the package name
        'price' => $amount,
        'payment_method' => $payment_method,
        'payment_status' => $payment_status,
        'transaction_id' => $transaction_id,
        'payment_date' => now(),
    ]);

    // Return the success view
    return view('front.payment_success', ['message' => 'Payment successful!']);
}




    public function payFastCancel(Request $request)
    {
        // Log the cancellation response
        PayFastLog::create([
            'logs' => 'PayFast Payment Cancelled',
            'data' => json_encode($request->all())
        ]);

        return view('front.payment_cancelled', ['message' => 'Payment was cancelled.']);
    }


    public function payFastNotify(Request $request)
    {
        // Log the notification data
        PayFastLog::create([
            'logs' => 'PayFast Payment Notification',
            'data' => json_encode($request->all())
        ]);

        // Here, you would typically update the payment status in your database
        return response()->json(['status' => 'success']);
    }
}
