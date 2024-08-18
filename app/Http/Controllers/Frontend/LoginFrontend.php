<?php

namespace App\Http\Controllers\Frontend;
// namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginFrontend extends Controller
{
    public function index()
    {
        return view('frontend.login.index', [
            'judul' => 'LOGIN',
            'sub' => 'Halaman Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd('login berhasil');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('frontend/home');
        }

        return back()->with('msgError', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login'); // Atau rute lain yang sesuai
    }
}
