<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocations;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        $transaksis = Transaksi::all();
        return view('backend.admin.transaksi', compact('transaksis'));
    }

    public function transaksiDelete($id_transaksi)
    {
        $transaksi = transaksi::find($id_transaksi);
        $transaksi->delete();

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Data transaksi tidak ditemukan.');
        }

        $transaksi->delete();

        return redirect()->back()->with('success', 'Data transaksi  berhasil dihapus.');
    }

    public function cetak($id)
    {
        $item = Transaksi::find($id);
        return view('backend.admin.nota', compact('item'));
    }
}
