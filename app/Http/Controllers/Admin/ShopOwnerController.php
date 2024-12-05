<?php

// app/Http/Controllers/ShopOwnerController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ShopOwner;
use App\Models\Package;
use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
    // Show the list of all shop owners
    public function index()
    {
        $shopOwners = ShopOwner::all();
        return view('admin.shop-owner.shop_owner', compact('shopOwners'));
    }

    // Show the form to create or edit a shop owner
    public function createOrEdit($id = null)
    {
        $shopOwner = $id ? ShopOwner::findOrFail($id) : null;
        $packages = Package::all(); // Assuming you have a Package model to list available packages
        return view('admin.shop-owner.add_edit_shop_owner', compact('shopOwner', 'packages'));
    }

    // Store or update the shop owner
    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'shop_name' => 'required|string|max:255',
            'domain' => 'nullable|url',
            'package_id' => 'required|exists:packages,id',
            'status' => 'required|in:active,inactive,suspended',
        ]);

        $shopOwner = $id ? ShopOwner::findOrFail($id) : new ShopOwner();
        
        $shopOwner->name = $request->name;
        $shopOwner->shop_name = $request->shop_name;
        $shopOwner->domain = $request->domain;
        $shopOwner->package_id = $request->package_id;
        $shopOwner->status = $request->status;
        $shopOwner->save();

        return redirect()->route('shop_owners.index')->with('success_message', 'Shop owner saved successfully!');
    }

    // Delete the shop owner
    public function destroy($id)
    {
        $shopOwner = ShopOwner::findOrFail($id);
        $shopOwner->delete();

        return redirect()->route('shop_owners.index')->with('success_message', 'Shop owner deleted successfully!');
    }
}

