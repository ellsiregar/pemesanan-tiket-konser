<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi() {
        $tikets = Tiket::all();
        return view('frontend.user.transaksi', compact('tikets'));
    }


}
