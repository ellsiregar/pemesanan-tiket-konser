<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('frontend.user.layouts.app');
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
