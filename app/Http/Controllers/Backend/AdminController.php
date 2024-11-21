<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken()  ;
        return view('auth.AdminLogin');
    }

    public function profile()
    {
        $profile = Auth::user();
        return view('backend.admin.profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $id_user = Auth::user()->users_id;
        $user = User::find($id_user);

        $request->validate([
            'username' => 'required|unique:users,username,' . $id_user . ',users_id',
            'password' => 'nullable|min:6',
            'name' => 'required',
        ]);

        $user->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.profile')->with('success', 'Data Anda Berhasil di Update');
    }
}
