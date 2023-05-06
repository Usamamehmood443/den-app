<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin-dashboard');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || $request->password !== $admin->password) {
            return redirect()->back()->with('error', 'Incorrect email or password.');
        }

        $token = $admin->createToken('admin-login-token')->plainTextToken;
        $request->session()->put('admin_token', $token);

        return redirect()->route('admin.dashboard');
    }
}
