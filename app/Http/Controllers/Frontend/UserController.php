<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('frontend.user.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken()  ;
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

    public function aboutTicketCard1(){
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card1', compact('konsers'));
    }

    public function aboutTicketCard2() {
        return view('frontend.user.about_ticket_card2');
    }


    public function aboutTicketCard3() {
        return view('frontend.user.about_ticket_card3');

    } public function aboutTicketCard4() {
        return view('frontend.user.about_ticket_card4');
    }

    public function aboutTicketCard5() {
        return view('frontend.user.about_ticket_card5');
    }

    public function aboutTicketCard6() {
        return view('frontend.user.about_ticket_card6');
    }

    public function aboutTicketCard7() {
        return view('frontend.user.about_ticket_card7');
    }

    public function aboutTicketCard8() {
        return view('frontend.user.about_ticket_card8');
    }

}
