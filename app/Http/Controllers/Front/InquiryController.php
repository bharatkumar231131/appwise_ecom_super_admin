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
            Inquiry::create([]);
        }
    }
}
