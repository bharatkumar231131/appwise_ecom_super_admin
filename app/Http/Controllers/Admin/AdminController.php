<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Package;
use App\Models\Setting;
use App\Models\ShopOwner;
use Carbon\Carbon;
use PhpParser\Node\Stmt\Return_;
use App\Models\User;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'email'    => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                'email.required'    => 'Email Address is required!',
                'email.email'       => 'Valid Email Address is required',
                'password.required' => 'Password is required!',
            ];

            $request->validate($rules, $customMessages);

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $user = Auth::user();

                if ($user->type == 'admin' && $user->status == '0') {
                    Auth::logout();
                    return redirect()->back()->with('error_message', 'Your admin account is not active');
                } elseif ($user->type == 'superadmin' || $user->type == 'admin') {
                    return redirect('/admin/dashboard');
                } else {
                    Auth::logout();
                    return redirect()->back()->with('error_message', 'Unauthorized access');
                }
            } else {
                return redirect()->back()->with('error_message', 'Invalid Email or Password');
            }
        }

        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function dashboard()
    {
        $totalPackages = Package::all()->count();
        $activePackages = Package::all()->where('status' , 'Active')->count();
        $totalShopOwner = ShopOwner::all()->count();
        $recentInquiries = Inquiry::latest()->take(5)->get();
        $salesData = ShopOwner::selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, count(*) as total')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->limit(12) 
        ->get();
        $labels = [];
        $data = [];
        foreach ($salesData as $sale) {
            $labels[] = Carbon::createFromDate($sale->year, $sale->month, 1)->format('M Y');
            $data[] = $sale->total;
        }
        return view('admin.index' , compact('totalPackages' , 'activePackages' , 'totalShopOwner' , 
        'recentInquiries','labels', 'data'));
    }

    public function delete($type, $id)
    {
        if ($type === "package") {
            $area = Package::findOrFail($id);
            $area->delete();
            return redirect()->back()->with('success_message', "Package delete succesfully");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }


    public function adminDetails(Request $request)
    { 
        return view('admin.setting.update_admin_detail');
    }

    public function updateAdminDetails(Request $request){
            // Validate the incoming request data
            $request->validate([
                'admin_name' => 'required|string|max:255',
                'admin_mobile' => 'nullable|numeric|digits:10',
                'admin_address' => 'nullable|string|max:500',
                'admin_latitude' => 'nullable|numeric',
                'admin_longitude' => 'nullable|numeric',
                'admin_country' => 'nullable|string|max:255',
                'admin_state' => 'nullable|string|max:255',
                'admin_city' => 'nullable|string|max:255',
                'admin_pincode' => 'nullable|string|max:10',
            ]);
    
            // Get the currently authenticated user
            $user = Auth::user(); // Authenticated user
    
            // Update the user's details
            $user->name = $request->input('admin_name');
            $user->mobile = $request->input('admin_mobile');
            $user->address = $request->input('admin_address');
            $user->country = $request->input('admin_country');
            $user->state = $request->input('admin_state');
            $user->city = $request->input('admin_city');
            $user->postal_code = $request->input('admin_pincode');
    
            // Save the updated data
            $user->save();
    
            // Redirect back with success message
            Session::flash('success_message', 'Admin details updated successfully.');
            return redirect()->back(); // Or you can redirect to a specific route
    }


public function adminprofile(){
    $users = User::all();
    return view('admin.setting.admin_profile' , compact('users'));
}


public function updateLogo(Request $request)
{
    // Get existing logo images
    $front_logo = Setting::where('id', '1')->select('front_logo')->first();
    $front_logo = $front_logo->front_logo;
    $admin_logo = Setting::where('id', '1')->select('admin_logo')->first();
    $admin_logo = $admin_logo->admin_logo;

    // Check if the request is a POST request
    if ($request->isMethod('post')) {
        // Handling Front Logo upload
        if ($request->hasFile('front_logo')) {
            $image_tmp = $request->file('front_logo');
            if ($image_tmp->isValid()) {
                // Get the image extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate a random name for the uploaded image
                $imageName = rand(111, 99999) . '.' . $extension;
                // Assigning the uploaded image path
                $imagePath = 'public/front/images/logo/' . $imageName;

                // Resize and save the image
                Image::make($image_tmp)->resize(200, 200)->save($imagePath);

                // Update the database with the new image name
                Setting::where('id', '1')->update(['front_logo' => $imageName]);
            }
        }

        // Handling Admin Logo upload
        if ($request->hasFile('admin_logo')) {
            $image_tmp = $request->file('admin_logo');
            if ($image_tmp->isValid()) {
                // Get the image extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate a random name for the uploaded image
                $imageName = rand(111, 99999) . '.' . $extension;
                // Assigning the uploaded image path
                $imagePath = 'public/front/images/logo/' . $imageName;

                // Resize and save the image
                Image::make($image_tmp)->resize(200, 200)->save($imagePath);

                // Update the database with the new image name
                Setting::where('id', '1')->update(['admin_logo' => $imageName]);
            }
        }

        // Set a success message
        return redirect()->back()->with('success_message', 'Logos updated successfully!');
    }

    // Return the view with existing logo images
    return view('admin.setting.admin_logo', compact('front_logo', 'admin_logo'));
}



}