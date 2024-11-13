<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KategoriTiket;
use App\Models\Konser;
use App\Models\Tiket;
use Illuminate\Http\Request;

class KategoriTiketController extends Controller
{
    public function tiket_kategori()
    {
        $KategoriTikets = KategoriTiket::all();
        return view('backend.admin.tiket_kategori', compact('KategoriTikets'));
    }

    public function create()
    {
        $konsers = Konser::all();
        return view('backend.admin.tambah_kategori_tiket', compact('konsers'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_konser' => 'required',
            'nama_kategori' => 'required',
            'harga_tiket' => 'required',
            'jumlah_tiket' => 'required',
        ]);

        KategoriTiket::create([
            'id_konser' => $request->id_konser,
            'nama_kategori' => $request->nama_kategori,
            'harga_tiket' => $request->harga_tiket,
            'jumlah_tiket' => $request->jumlah_tiket,
        ]);
        return redirect()->route('admin.tiket_kategori')->with('success', 'Kategori tiket berhasil ditambahkan!');

    }
}
