<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|digits:10',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:1000',
    ], [
        'name.required' => 'Please enter your name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'phone.required' => 'Please enter your phone number.',
        'phone.digits' => 'Phone number must be exactly 10 digits.',
        'subject.required' => 'Please enter a subject.',
        'message.required' => 'Please enter your message.',
        'message.max' => 'Message cannot be more than 1000 characters.',
    ]);

    Enquiry::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return redirect()->back()->with(
        'success',
        'Your enquiry has been submitted successfully!'
    );

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
    }

        public function index()
    {
        if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

        $enquiries = Enquiry::all();

        return view('admin.enquiries', compact('enquiries'));
    }
    
        public function edit($id)
    {
        if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

        $enquiry = Enquiry::findOrFail($id);

        return view('admin.edit-enquiry', compact('enquiry'));
    }

        public function update(Request $request, $id)
    {
        if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

        $enquiry = Enquiry::findOrFail($id);

        $enquiry->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

        return redirect()->route('admin.enquiries')
        ->with('success', 'Enquiry updated successfully!');
}

        public function destroy($id)
{
        if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('admin.enquiries')
        ->with('success', 'Enquiry deleted successfully!');
}
    public function export()
{
    if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

    $enquiries = Enquiry::all();

    $filename = 'enquiries.csv';

    $handle = fopen($filename, 'w');

    fputcsv($handle, [
        'ID',
        'Name',
        'Email',
        'Phone',
        'Subject',
        'Message'
    ]);

    foreach ($enquiries as $enquiry) {
        fputcsv($handle, [
            $enquiry->id,
            $enquiry->name,
            $enquiry->email,
            $enquiry->phone,
            $enquiry->subject,
            $enquiry->message
        ]);
    }

    fclose($handle);

    return response()->download($filename)->deleteFileAfterSend(true);
}
}