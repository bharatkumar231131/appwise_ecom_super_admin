<?php
// app/Http/Controllers/InquiriesController.php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('inquiry.inquiry', compact('inquiries'));
    }

    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();
        return redirect()->route('inquiries.index')->with('success_message', 'Inquiry deleted successfully!');
    }

    public function changeStatus($id, $status)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->status = $status;
        $inquiry->save();

        return redirect()->route('inquiries.index')->with('success_message', 'Inquiry status updated!');
    }
}
