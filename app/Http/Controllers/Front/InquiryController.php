<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    //

    public function inquiry()
    {
        return view('front.inquiry.inquiry');
    }
}
