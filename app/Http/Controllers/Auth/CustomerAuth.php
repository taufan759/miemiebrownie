<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Auth\Customer;

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
            // Autentikasi berhasil
            return redirect()->intended('customer/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
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

        return redirect()->intended('customer/home');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/customer/login');
    }
}
