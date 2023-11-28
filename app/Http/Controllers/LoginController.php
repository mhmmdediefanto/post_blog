<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('public.login.index', [
            'title' => 'Login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            // jika berhasil redirect

            return redirect()->intended('/dashboard');
        }

        // jika gagal kasih pesan
        return back()->with('status', 'Username dan password Salah');
    }

    // funtion logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
