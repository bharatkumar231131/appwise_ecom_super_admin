<?php
// app/Http/Controllers/InquiriesController.php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function inquiryForm()
    {
        return view('front.inquiry.inquiry');
    }


    public function inquirySubmit(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);

        Inquiry::create($request->all());

        return redirect()->route('inquiry')->with('success_message', 'Succefully send you message!');
    }

   
}