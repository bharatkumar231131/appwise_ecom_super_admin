<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Package;

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
        return view('admin.index');
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
}