<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.index');
    }

    public function authenticate(Request $request)
    {
        // dd(Auth::user());
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // cek login valid?
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role != 'Admin') {
                return redirect()->intended('/');
            }
            return redirect()->intended('/kategori');
        }
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(UserRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        return redirect()->route('login');
    }
}
