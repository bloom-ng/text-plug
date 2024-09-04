<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            dd("Got here");
            return redirect('/admin/dashboard');
        } else {
            return redirect("/admin/login")->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function updatePassword(Request $request, Admin $admin)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:new_password',
        ]);

        if (!Hash::check($request->input('current_password'), $admin->password)) {
            return back()->with('error', 'Current password is incorrect');
        }

        $admin->update(['password' => Hash::make($request->input('new_password'))]);

        return redirect()->route('admins.index')->with('success', 'Password updated successfully!');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
