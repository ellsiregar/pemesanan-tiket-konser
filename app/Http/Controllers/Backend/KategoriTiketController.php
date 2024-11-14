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
        ]);

        KategoriTiket::create([
            'id_konser' => $request->id_konser,
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect()->route('admin.tiket_kategori')->with('success', 'Kategori tiket berhasil ditambahkan!');

    }

    public function edit(string $id)
    {
        $KategoriTiket = KategoriTiket::find($id);
        $konsers = Konser::all();

        if(!$KategoriTiket) {
            return back();
        }
        return view('backend.admin.edit_kategori_tiket', compact('KategoriTiket', 'konsers'));
    }

    public function update(Request $request, string $id)
    {
        $KategoriTiket = KategoriTiket::find($id);

        $request->validate([
            'id_konser' => 'required',
            'nama_kategori' => 'required',
        ]);

        $KategoriTiket->update([
            'id_konser' => $request->id_konser,
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('admin.tiket_kategori')->with('success', "Data tiket Berhasil di Edit");
    }

    public function delete($id_kategori_tiket){
        $KategoriTiket = KategoriTiket::find($id_kategori_tiket);
        $KategoriTiket->delete();

    if (!$KategoriTiket) {
        return redirect()->back()->with('error', 'Data tiket tidak ditemukan.');
    }

    $KategoriTiket->delete();

    return redirect()->back()->with('success', 'Data tiket  berhasil dihapus.');

    }
}
