<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('public.register.index', [
            'title' => 'Register'
        ]);
    }

    public function storeUser(Request $request)
    {
        $rulesValidate = $request->validate([
            'name' => 'required|max:64',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:25'
        ]);

        $rulesValidate['password'] = Hash::make($rulesValidate['password']);
        User::create($rulesValidate);

        return redirect('/login')->with('status', 'Registered Success, Please login now!');
    }
}
