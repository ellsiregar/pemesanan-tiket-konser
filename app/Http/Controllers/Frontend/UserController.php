<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('frontend.user.layouts.app');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.UserLogin');
    }



    public function aboutTicketCard1($id_konser){
        $konsers = Konser::all();
        $konser = Tiket::find($id_konser);
        return view('frontend.user.about_ticket_card1', compact('konsers'));
    }

    public function aboutTicketCard2() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card2', compact('konsers'));
    }


    public function aboutTicketCard3() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card3', compact('konsers'));

    } public function aboutTicketCard4() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card4', compact('konsers'));
    }

    public function aboutTicketCard5() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card5', compact('konsers'));
    }

    public function aboutTicketCard6() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card6', compact('konsers'));
    }

    public function aboutTicketCard7() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card7', compact('konsers'));
    }

    public function aboutTicketCard8() {
        $konsers = Konser::all();
        return view('frontend.user.about_ticket_card8', compact('konsers'));
    }

}
