<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KategoriTiket;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function tiket() {
        $tikets = Tiket::all();
        return view('backend.admin.tiket', compact('tikets'));
    }

    public function create() {
        $KategoriTikets = KategoriTiket::all();
        return view('backend.admin.tambah_tiket', compact( 'KategoriTikets'));
    }

    public function store(Request $request) {
        $request->validate([
            'id_kategori_tiket' => 'required',
            'quantity' => 'required',
            'harga_tiket' => 'required',
        ]);

        Tiket::create([
            'id_kategori_tiket' => $request->id_kategori_tiket,
            'quantity' => $request->quantity,
            'harga_tiket' => $request->harga_tiket,
        ]);
        return redirect()->route('tiket')->with('success', 'Data tiket berhasil ditambahkan!');
    }

    public function edit() {}
    

    public function update() {}

    public function delete() {}
}
