<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi() {
        $tikets = Tiket::all();
        return view('frontend.user.transaksi', compact('tikets'));
    }

    public function chekout(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:10',
        ]);

        $transaksi = Transaksi::create([
            'nama'=> $request->nama,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return view('', compact('transaksi'));

    }


}
