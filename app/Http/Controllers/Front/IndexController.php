<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\ShopOwner;
use App\Models\PackageBuy;

class IndexController extends Controller
{
    //
    public function index()
    {
        $packages = Package::all();
        return view('front.index', compact('packages'));
        return view('front.home', compact('packages'));
    }

    public function packageBuy($id)
    {
        return "hello";
    }

    public function saveOwnerDetails(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string',
        //     // 'shop_name' => 'required|string',
        //     // 'domain' => 'required|string',
        //     // // 'address' => 'required|string',
        //     // 'package_id' => 'required|integer',
        //     // // 'price' => 'required|numeric',
        //     // 'status' => 'active'
        // ]);
        // return "hello";
        // $owner = ShopOwner::create($validated);
        // return $request;
        $owner = ShopOwner::create([
            'name' => $request->owner_name,
            'shop_name' => $request->shop_name,
            'domain' => $request->domain,
            // 'address' => 'required|string',
            'package_id' => $id,
            // 'price' => 'required|numeric',
            'status' => 'active'
        ]);
        // return $owner;
        $owner_id = $owner->id;
        // Redirect to the payment page
        return redirect()->route('package.payment', ['id' => $id, 'owner_id' => $owner_id]);
    }

    public function paymentPage($id, Request $request)
    {
        $package = Package::findOrFail($id);
        $owner_id = $request->owner_id;
        return view('front.payment_page', compact('package', 'owner_id'));
    }

    public function processPayment(Request $request, $id)
    {
        // return $request;
        // $validated = $request->validate([
        //     'owner_name' => 'required|string',
        //     'shop_name' => 'required|string',
        //     'domain' => 'required|string',
        //     'address' => 'required|string',
        //     'price' => 'required|numeric',
        //     'payment_method' => 'required|in:cod,payfast',
        // ]);
        $package = Package::where('id', $id)->first();
        // return $package;
        if ($request->payment_method === 'cod') {

            PackageBuy::create([
                'package_id' => $request->package_id,
                'shop_owner_id' => $request->owner_id,
                'package_name' => $package['name'],
                'number_of_section' => $package['number_of_section'],
                'number_of_category' => $package['number_of_category'],
                'number_of_product' => $package['number_of_product'],
                'price' => $package->price,
                'days' => $package->days,
            ]);

            return view('front.payment_success', ['message' => 'Order placed successfully with Cash on Delivery!']);
        } elseif ($request->payment_method === 'payfast') {
            // Handle PayFast Payment
            // Redirect to PayFast or process payment here
            return redirect()->route('payfast.gateway', ['id' => $id, 'price' => $request->price]);
        }

        return back()->withErrors(['error' => 'Invalid payment method selected']);
    }
}
