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

    public function showProfile()
{
    $customer = Auth::guard('customer')->user();
    return view('frontend.customerdetail.index', compact('customer'));
}

public function updateProfile(Request $request)
{
    $customer = Auth::guard('customer')->user();

    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:customer,email,' . $customer->id,
        'hp' => 'required|string|max:15',
        'alamat' => 'nullable|string|max:255',
        'jenis_kelamin' => 'nullable|string|in:Laki-laki,Perempuan',
        'sosmed' => 'nullable|string|max:255',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $customer->update($validatedData);

    return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
}

public function editProfile()
{
    $customer = Auth::guard('customer')->user();
    return view('frontend.customerdetail.edit', compact('customer'));
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
