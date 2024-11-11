<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
       return view('backend.admin.dashboard');
    }

    public function logout(){
        return view('auth.AdminLogin');
    }
}
