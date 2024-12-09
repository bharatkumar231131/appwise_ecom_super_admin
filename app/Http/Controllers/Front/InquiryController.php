<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    //

    public function inquiry()
    {
        return view('front.inquiry.inquiry');
    }

    public function saveInquiry(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();


            $rules = [
                'name' => 'required',
                'name' => 'email',
                'name' => 'j',
                'name' => 'required',
                'name' => 'required',

            ];

            $customMessages = [
                'name.required' => 'Package Name is required.',
                'number_of_section.integer' => 'Number of sections must be an integer.',
                'number_of_category.integer' => 'Number of categories must be an integer.',
                'number_of_product.integer' => 'Number of products must be an integer.',
                'price.numeric' => 'Price must be a valid number.',
                'days.numeric' => 'Price must be a valid number.',
            ];

            $validator = Validator::make($data, $rules, $customMessages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            Inquiry::create([]);
        }
    }
}
