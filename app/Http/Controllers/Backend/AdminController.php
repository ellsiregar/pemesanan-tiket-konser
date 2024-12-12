<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalKonser = Konser::count();
        $PenggunaTerdaftar = User::count();
        $TiketTerjual = Transaksi::count('id_tiket');
        // Hitung pendapatan berdasarkan jumlah tiket terjual dan harga tiket
        $pendapatan = Transaksi::join('tiket', 'transaksi.id_tiket', '=', 'tiket.id_tiket')
            ->sum(DB::raw('transaksi.amount'));

        return view('backend.admin.dashboard', compact('totalKonser', 'PenggunaTerdaftar', 'TiketTerjual', 'pendapatan'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
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
