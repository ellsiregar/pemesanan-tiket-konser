<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocations;
use App\Models\Tiket;
use Illuminate\Http\Request;

class SeatAllocationsController extends Controller
{
    public function seat($id_tiket)
    {
        $Tiket = Tiket::find($id_tiket);
        if (!$Tiket) {
            return back();
        }
        $SeatAllocations = SeatAllocations::where('id_tiket', $Tiket->id_tiket)->get();

        return view('backend.admin.seat_allocations', compact('SeatAllocations', 'id_tiket'));
    }

    public function create($id_tiket)
    {
        $Tiket = Tiket::find($id_tiket);
        if (!$Tiket) {
            return back();
        }
        $tikets = Tiket::all();
        $SeatAllocations = SeatAllocations::with('tiket.kategoriTiket')->get();

        return view('backend.admin.tambah_SeatAllocations', compact('tikets', 'SeatAllocations', 'id_tiket'));
    }

    public function store(Request $request, $id_tiket)
    {

        $request->validate([

            'nomor_tempat_duduk' => 'required',
        ]);

        SeatAllocations::create([
            'id_tiket' => $id_tiket,
            'nomor_tempat_duduk' => $request->nomor_tempat_duduk,
        ]);
        return redirect()->route('seat',  ['id_tiket' => $id_tiket])->with('success', 'Seat Allocations berhasil ditambahkan!');
    }

    public function edit($id_tiket, $id_lokasi)
    {
        $SeatAllocation = SeatAllocations::where('id_tiket', $id_tiket)
            ->where('id_lokasi', $id_lokasi)
            ->first();

        if (!$SeatAllocation) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        return view('backend.admin.edit_seat_allocations', compact('id_lokasi', 'id_tiket', 'SeatAllocation'));
    }


    public function update(Request $request, $id_tiket, $id_lokasi)
    {
        $SeatAllocation = SeatAllocations::find('id_lokasi');

        $request->validate([
            'nomor_tempat_duduk' => 'required'
        ]);


        $SeatAllocation = SeatAllocations::where('id_tiket', $id_tiket)
            ->where('id_lokasi', $id_lokasi)
            ->first();


        if (!$SeatAllocation) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $SeatAllocation->update([
            'id_tiket' => $id_tiket,
            'nomor_tempat_duduk' => $request->nomor_tempat_duduk,
        ]);


        // Redirect dengan pesan sukses
        return redirect()->route('seat', $id_tiket)
            ->with('success', 'Seat number berhasil diperbarui.');
    }



    public function delete($id_tiket, $id_lokasi)
    {
        // Temukan data berdasarkan id_lokasi
        $SeatAllocation = SeatAllocations::find($id_lokasi);

        // Jika data tidak ditemukan, kembalikan dengan pesan error
        if (!$SeatAllocation) {
            return redirect()->route('seat', $id_tiket)->with('error', 'Data tempat duduk tidak ditemukan.');
        }

        // Hapus data
        $SeatAllocation->delete();

        // Redirect kembali ke halaman seat dengan pesan sukses
        return redirect()->route('seat', $id_tiket)->with('success', 'Data tempat duduk berhasil dihapus.');
    }
}
