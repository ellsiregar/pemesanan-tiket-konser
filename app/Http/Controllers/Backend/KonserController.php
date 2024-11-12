<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{


    public function konser()
    {
        $konsers = Konser::all();
        return view('backend.admin.konser', compact('konsers'));
    }

    public function create()
    {
        return view('backend.admin.tambah_konser');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_konser' => 'required',
            'nama_artis_band' => 'required',
            'lokasi' => 'required',
            'tanggal_konser' => 'required',
            'waktu_konser' => 'required',
            'deskripsi' => 'required',
        ]);

        Konser::create([
            'nama_konser' => $request->nama_konser,
            'nama_artis_band' => $request->nama_artis_band,
            'lokasi' => $request->lokasi,
            'tanggal_konser' => $request->tanggal_konser,
            'waktu_konser' => $request->waktu_konser,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('konser')->with('success', 'Konser berhasil ditambahkan!');

    }

    public function edit(string $id)
    {
        $konser = Konser::find($id);
        if(!$konser) {
            return back();
        }
        return view('backend.admin.edit_konser', compact('konser'));
    }

    public function update(Request $request, string $id)
    {
        $konser = Konser::find($id);

        $request->validate([
            'nama_konser' => 'required',
            'nama_artis_band' => 'required',
            'lokasi' => 'required',
            'tanggal_konser' => 'required',
            'waktu_konser' => 'required',
            'deskripsi' => 'required',
        ]);

        $konser->update([
            'nama_konser' => $request->nama_konser,
            'nama_artis_band' => $request->nama_artis_band,
            'lokasi' => $request->lokasi,
            'tanggal_konser' => $request->tanggal_konser,
            'waktu_konser' => $request->waktu_konser,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('konser')->with('success', "Data konser Berhasil di Edit");
    }
    public function delete($id_konser){
        $konser = Konser::find($id_konser);
        $konser->delete();

    if (!$konser) {
        return redirect()->back()->with('error', 'Data konser tidak ditemukan.');
    }

    $konser->delete();

    return redirect()->back()->with('success', 'Data konser berhasil dihapus.');

    }
}
