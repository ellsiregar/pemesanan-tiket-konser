<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $konsers = Konser::all();
       return view('backend.admin.dashboard', compact('konsers'));
    }

    public function logout(){
        return view('auth.AdminLogin');
    }
}
