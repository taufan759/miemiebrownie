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
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman yang dimaksud atau ke dashboard
            return redirect()->intended('/')->with('success', 'Login berhasil!');
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan error
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
        // Validasi data pendaftaran
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:customer,email',
            'hp' => 'required|digits_between:10,13',
            'password' => 'required|min:8|confirmed',
        ]);

        // Hash password sebelum menyimpan
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Buat customer baru
        $customer = Customer::create($validatedData);

        // Login otomatis setelah mendaftar
        Auth::guard('customer')->login($customer);

        // Redirect ke halaman utama atau dashboard setelah login
        return redirect()->intended('/')->with('success', 'Pendaftaran berhasil dan Anda telah login.');
    }
    
    public function logout(Request $request)
    {
        // Melakukan proses logout untuk guard 'customer'
        Auth::guard('customer')->logout();

        // Invalidasi session yang ada
        $request->session()->invalidate();

        // Regenerasi token CSRF untuk keamanan
        $request->session()->regenerateToken();

        // Redirect ke halaman login dengan pesan logout
        return redirect('/customer/login')->with('status', 'Anda telah berhasil logout.');
    }
}
