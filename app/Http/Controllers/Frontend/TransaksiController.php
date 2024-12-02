<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi() {
        return view('frontend.user.transaksi');
    }


}
