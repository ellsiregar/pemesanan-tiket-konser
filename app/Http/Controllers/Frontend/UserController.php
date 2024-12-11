<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Reviews;
use App\Models\Tiket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $konsers = Konser::all();

        // Tiket termurah (reguler)
        $tiketTermurah = Tiket::whereHas('kategoriTiket', function ($query) {
            $query->where('nama_kategori', 'reguler');
        })->orderBy('harga_tiket', 'asc')->first();

        // Tiket termahal (vvip)
        $tiketTermahal = Tiket::whereHas('kategoriTiket', function ($query) {
            $query->where('nama_kategori', 'VVIP');
        })->orderBy('harga_tiket', 'desc')->first();

        return view('frontend.user.dashboard', compact('konsers', 'tiketTermurah', 'tiketTermahal'));
    }

    public function aboutTiketKonser($id_konser)
    {
        $konser = Konser::find($id_konser);
        if (!$konser) {
            return back();
        }
        $tikets = Tiket::whereHas('kategoriTiket', function ($query) use ($id_konser) {
            $query->where('id_konser', $id_konser);
        })->with('kategoriTiket.konser')->get();

        $concertDate = Carbon::parse($konser->tanggal_konser);

        // Ambil data review terkait konser
        $reviews = Reviews::where('id_konser', $id_konser)->with('user')->get();
        if ($reviews->isEmpty()) {
            $reviews = collect(); // Koleksi kosong
        }

        return view('frontend.user.about_tiket_konser', compact('konser', 'tikets', 'concertDate', 'reviews'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.UserLogin');
    }

    public function profileUser()
    {
        // Ambil data pengguna yang sedang login
        $profile = Auth::user();

        // Kirim data ke view 'frontend.user.profile'
        return view('frontend.user.profile', compact('profile'));
    }

    // Memperbarui data profil pengguna
    public function updateUser(Request $request)
    {

        $id_user = Auth::user()->users_id;
        $user = User::findOrFail($id_user);


        $request->validate([
            'username' => 'required',
            'password' => 'nullable|min:6',
            'name' => 'required',
        ]);


        $user->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
            'name' => $request->name,
        ]);

        return redirect()->route('user.profile')->with('success', 'Data Anda Berhasil di Update');
    }
}
