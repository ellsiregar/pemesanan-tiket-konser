<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeatAllocations;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(){
        $transaksis = Transaksi::all();
        return view('backend.admin.transaksi', compact('transaksis'));
    }

    public function showNota($id_transaksi)
    {
        // Ambil data transaksi dengan relasi tiket dan seat allocations
        $transaksi = Transaksi::with('tiket', 'seatAllocations')->where('id_transaksi', $id_transaksi)->first();

        // Jika transaksi tidak ditemukan
        if (!$transaksi) {
            return response()->json([
                'message' => 'Transaksi ini tidak ditemukan! Pastikan Anda memasukkan nomor transaksi yang benar ya!'
            ], 404);
        }

        // Format data nota
        $nota = [
            'title' => 'Nota Transaksi Anda',
            'subtitle' => 'Terima kasih telah melakukan pembelian!',
            'detail' => [
                'Nomor Transaksi' => $transaksi->id_transaksi,
                'Nama Tiket' => $transaksi->tiket->nama_tiket ?? 'Tidak ditemukan',
                'Harga Tiket' => number_format($transaksi->tiket->harga_tiket ?? 0, 0, ',', '.'),
                'Metode Pembayaran' => $transaksi->payment_method,
                'Status Pembayaran' => ucfirst($transaksi->payment_status),
                'Tanggal Transaksi' => $transaksi->transaction_date->format('d-m-Y H:i:s'),
                'Total Pembayaran' => 'Rp ' . number_format($transaksi->amount, 0, ',', '.'),
                'Nomor Kursi' => $transaksi->seatAllocations->pluck('seat_number')->toArray(),
            ],
            'footer' => 'Semoga acara yang Anda hadiri menyenangkan! 😊'
        ];

        return response()->json($nota);
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'id_tiket' => 'required|integer',
            'payment_method' => 'required|string',
            'payment_status' => 'required|in:pending,completed,failed',
            'amount' => 'required|integer',
        ]);

        // Simpan data transaksi
        $transaksi = Transaksi::create([
            'id_tiket' => $request->id_tiket,
            'payment_method' => $request->payment_method,
            'payment_status' => $request->payment_status,
            'transaction_date' => now(),
            'amount' => $request->amount,
        ]);

        // Logika auto-generate seat allocation
        $totalSeats = 1; // Jumlah kursi yang ingin dialokasikan
        $seatPrefix = "A"; // Prefix untuk nomor kursi

        $seatAllocations = []; // Array untuk batch insert

        for ($i = 1; $i <= $totalSeats; $i++) {
            $seatAllocations[] = [
                'id_transaksi' => $transaksi->id_transaksi,
                'seat_number' => $seatPrefix . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Simpan alokasi kursi
        SeatAllocations::insert($seatAllocations);

        return response()->json([
            'message' => 'Transaksi berhasil dan kursi telah dialokasikan!',
            'transaksi' => $transaksi->load('seatAllocations', 'tiket'), // Load relasi untuk respons
        ]);
    }
}
