<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Customer;

class CustomerAuth extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.login.index', [
            'judul' => 'Customer Login',
            'sub' => 'Halaman Login Customer',
        ]);
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('customer')->attempt($credentials)) {
        return redirect()->intended('/');
    } else {
        // Login gagal
        return redirect()->back()->with('error', 'Login gagal, email atau password salah.');
    }
}


    public function showSignUpForm()
    {
        return view('frontend.login.index', [
            'judul' => 'Customer Sign Up',
            'sub' => 'Halaman Sign Up Customer',
        ]);
    }

    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:customer',
            'hp' => 'required|min:10|max:13',
            'password' => 'required|min:8|confirmed',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $customer = Customer::create($validatedData);

        Auth::guard('customer')->login($customer);

        return redirect()->intended('customer/login');
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/customer/login')->with('status', 'Anda telah berhasil logout.');
    }
}
