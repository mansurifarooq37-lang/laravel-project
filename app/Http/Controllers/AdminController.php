<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            session(['admin_id' => $admin->id]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }
        public function logout(Request $request)
    {
        $request->session()->forget('admin_id');

        return redirect()->route('admin.login');
    }
public function dashboard()
{
    if (!session('admin_id')) {
        return redirect()->route('admin.login');
    }

    return view('admin.dashboard');
}
   
}

