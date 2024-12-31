<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.transactions.transaction' , compact('transactions'));
    }
}
