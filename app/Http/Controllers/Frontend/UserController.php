<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('frontend.user.layouts.app');
    }

    public function aboutTicket(){
        return view('frontend.user.about_ticket');
    }
}
