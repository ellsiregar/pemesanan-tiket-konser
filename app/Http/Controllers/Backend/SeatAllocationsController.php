<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocations;
use App\Models\Tiket;
use Illuminate\Http\Request;

class SeatAllocationsController extends Controller
{
    public function seat(){

        $SeatAllocations = SeatAllocations::with('tiket.kategoriTiket')->get();

        return view('backend.admin.seat_allocations', compact('SeatAllocations'));
    }

    public function create(){
        $tikets = Tiket::all();
        $SeatAllocations = SeatAllocations::with('tiket.kategoriTiket')->get();

        return view('backend.admin.tambah_SeatAllocations', compact('tikets','SeatAllocations'));
    }

    public function store(Request $request){

        $request->validate([
            'id_tiket' => 'required',
            'nomor_tempat_duduk' => 'required',
        ]);

        SeatAllocations::create([
            'id_tiket' => $request->id_tiket,
            'nomor_tempat_duduk' => $request->nomor_tempat_duduk,
        ]);
        return redirect()->route('seat')->with('success', 'Seat Allocations berhasil ditambahkan!');
    }

    public function delete($id_lokasi){
        $SeatAllocations = SeatAllocations::find($id_lokasi);
        $SeatAllocations->delete();

    if (!$SeatAllocations) {
        return redirect()->back()->with('error', 'Data tiket tidak ditemukan.');
    }

    $SeatAllocations->delete();

    return redirect()->back()->with('success', 'Data tempat duduk berhasil dihapus.');
    }
}
