<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diskon;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function diskon()
    {
        $diskons = Diskon::all();
        return view('backend.admin.diskon', compact('diskons'));
    }

    public function create()
    {
        $tikets = Tiket::all();
        return view('backend.admin.tambah_diskon', compact('tikets'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'persentase_diskon' => 'required|max:10',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        Diskon::create([
            'diskon_kode' => 'DSK-' . strtoupper(uniqid()), // Auto generate
            'persentase_diskon' => $request->persentase_diskon,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);
        return redirect()->route('diskon')->with('success', 'Diskon berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $Diskon = Diskon::find($id);
        $tikets = Tiket::all();
        return view('backend.admin.edit_diskon', compact('tikets','Diskon'));
    }

    public function update(Request $request, $id)
    {
        $Diskon = Diskon::find($id);

        $request->validate([
            'persentase_diskon' => 'required|max:10',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $Diskon->update([
            'persentase_diskon' => $request->persentase_diskon,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
        ]);
        return redirect()->route('diskon')->with('success', 'Diskon berhasil Update!');
    }

    public function delete($id){
        $Diskon = Diskon::find($id);

    if (!$Diskon) {
        return redirect()->back()->with('error', 'Data Diskon tidak ditemukan.');
    }

    $Diskon->delete();

    return redirect()->back()->with('success', 'Data Diskon  berhasil dihapus.');

    }
}
