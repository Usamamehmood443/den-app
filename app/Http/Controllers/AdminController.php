<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $totalCustomers = Customer::count();
        $newCustomers = Customer::where('created_at', '>', Carbon::now()->subDay())->count();
        $customers = Customer::all();
        return view('admin-dashboard', ['totalCustomers' => $totalCustomers, 'newCustomers' => $newCustomers, 'customers' => $customers]);
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
