<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{

    public function create() {
        return view('backend.admin.tambah_konser');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_konser' => 'required|string|max:255',
            'nama_artis_band' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal_konser' => 'required|date',
            'waktu_konser' => 'required',
            'deskripsi' => 'required|string',
        ]);

        Konser::create([
            'nama_konser' => $request->nama_konser,
            'nama_artis_band' => $request->nama_artis_band,
            'lokasi' => $request->lokasi,
            'tanggal_konser' => $request->tanggal_konser,
            'waktu_konser' => $request->waktu_konser,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('konser_index')->with('success', 'Konser berhasil ditambahkan!');
    }

}
