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
        $KategoriTikets = KategoriTiket::all();
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

    public function edit($id_tiket) {
        $KategoriTikets = KategoriTiket::all();
        $Tiket = Tiket::find($id_tiket);
        if(!$Tiket) {
            return back();
        }
        return view('backend.admin.edit_tiket', compact('Tiket','KategoriTikets'));
    }

    public function update(Request $request, $id_tiket) {
        $Tiket = Tiket::find($id_tiket);
        $request->validate([
            'id_kategori_tiket' => 'required',
            'quantity' => 'required',
            'harga_tiket' => 'required',
        ]);

        $Tiket->update([
            'id_kategori_tiket' => $request->id_kategori_tiket,
            'quantity' => $request->quantity,
            'harga_tiket' => $request->harga_tiket,
        ]);
        return redirect()->route('tiket')->with('success', 'Data tiket berhasil diedit!');
    }

    public function delete($id_tiket) {
        $Tiket = Tiket::find($id_tiket);
        $Tiket->delete();

    if (!$Tiket) {
        return redirect()->back()->with('error', 'Data tiket tidak ditemukan.');
    }

    $Tiket->delete();

    return redirect()->back()->with('success', 'Data tiket  berhasil dihapus.');

    }
}
