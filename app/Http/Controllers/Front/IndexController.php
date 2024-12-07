<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class IndexController extends Controller
{
    //
    public function index()
    {
        $packages = Package::all();
        return view('front.index', compact('packages'));
    }
}
