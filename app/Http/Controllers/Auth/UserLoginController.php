<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('auth.AdminLogin');
    }
    public function loginUser()
    {
        return view('auth.UserLogin');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function submit(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($request->route()->named('user.submit') && $user->role !== 'user') {
                Auth::logout();
                return redirect()->route('user.login')->withErrors(['login_error' => 'Halaman tidak sesuai untuk role Anda.']);
            }elseif ($request->route()->named('admin.UserSubmit') && $user->role !== 'admin') {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['login_error' => 'Halaman tidak sesuai untuk role Anda.']);
            }

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors(['login_error' => 'Username atau password salah'])->onlyInput('username');
    }

    public function RegisterSubmit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user',
        ]);


        return redirect()->route('user.login')->with('success', 'Registrasi berhasil silahkan log in.');
        }
    }

