<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    //
    public function packages()
    {
        $packages = Package::get()->toArray();
        return view('admin.packages.packages', compact('packages'));
    }

    public function addEditPackage(Request $request, $id = null)
    {
        if ($id == '') {
            $title = 'Add Package';
            $package = new Package();
            $message = 'Package added successfully!';
        } else {
            $title = 'Edit Package';
            $package = Package::find($id);

            if (!$package) {
                return redirect('admin/packages')->with('error_message', 'Package not found!');
            }

            $message = 'Package updated successfully!';
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            // Define validation rules
            $rules = [
                'name' => 'required',
                'number_of_section' => 'nullable|integer|min:0',
                'number_of_category' => 'nullable|integer|min:0',
                'number_of_product' => 'nullable|integer|min:0',
                'price' => 'nullable|numeric|min:0',
                'description' => 'nullable|string',
            ];

            // Define custom error messages
            $customMessages = [
                'name.required' => 'Package Name is required.',
                'number_of_section.integer' => 'Number of sections must be an integer.',
                'number_of_category.integer' => 'Number of categories must be an integer.',
                'number_of_product.integer' => 'Number of products must be an integer.',
                'price.numeric' => 'Price must be a valid number.',
            ];

            // Validate the request data using Validator
            // $validator = \validator::make($data, $rules, $customMessages);
            $validator = Validator::make($data, $rules, $customMessages);


            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Save the package data
            $package->name = $data['name'];
            $package->number_of_section = $data['number_of_section'];
            $package->number_of_category = $data['number_of_category'];
            $package->number_of_product = $data['number_of_product'];
            $package->price = $data['price'];
            $package->description = $data['description'];
            $package->save();

            return redirect('admin/packages')->with('success_message', $message);
        }

        return view('admin.packages.add_edit_package')->with(compact('title', 'package'));
    }
}