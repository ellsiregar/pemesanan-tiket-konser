<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use App\Models\Transaksi;
use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class TransaksiController extends Controller
{
    public function transaksi($id, $id_tiket)
    {
        $konser = Konser::find($id);
        if (!$konser) {
            // Pesan flash jika konser tidak ditemukan
            return back()->with('error', 'Konser tidak ditemukan!');
        }

        // Hanya mengambil tiket yang terkait dengan konser ini
        $tiket = Tiket::where('id_tiket', $id_tiket)
            ->whereHas('kategoriTiket', function ($query) use ($id) {
                $query->where('id_konser', $id);
            })
            ->with('kategoriTiket.konser')
            ->first(); // Gunakan `first()` jika hanya satu tiket yang diinginkan

        return view('frontend.user.shopping_cart', compact('konser', 'tiket'));
    }

    public function applyDiscount(Request $request)
    {
        $kodeDiskon = $request->input('kode_diskon');

        // Cek apakah kode diskon ada di database
        $diskon = Diskon::where('diskon_kode', $kodeDiskon)->first();

        if ($diskon) {
            // Cek apakah diskon telah melewati tanggal kadaluarsa
            $tanggalKadaluarsa = $diskon->tanggal_kadaluarsa;
            if ($tanggalKadaluarsa < now()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kode diskon telah kadaluarsa!',
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Diskon berhasil diterapkan!',
                'persentase_diskon' => $diskon->persentase_diskon,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kode diskon tidak valid!',
            ]);
        }
    }

    public function process(Request $request)
    {
        $data = $request->all();

        $transaksi = Transaksi::create([
            'users_id' => Auth::user()->users_id,
            'id_tiket' => $data['id_tiket'],
            'amount' => $data['amount'],
            'payment_status' => 'pending',
            'transaction_date' => now(),
        ]);

        // Ambil tiket berdasarkan id
        $tiket = Tiket::find($data['id_tiket']);

        // Pastikan kuantitas tiket yang diminta tidak lebih dari stok yang tersedia
        if ($tiket->quantity < $data['ticket_quantity']) {
            return redirect()->back()->with('error', 'Stok tiket tidak mencukupi.');
        }

        // Kurangi kuantitas tiket berdasarkan jumlah yang dibeli
        $tiket->quantity -= $data['ticket_quantity'];
        $tiket->save(); // Simpan perubahan kuantitas tiket

        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['amount'],
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
        );

        $snapToken = Snap::getSnapToken($params);

        $transaksi->snap_token = $snapToken;
        $transaksi->save();

        return redirect()->route('user.checkout', $transaksi->id_transaksi);
    }

    public function checkout(Transaksi $transaksi)
    {
        $tikets = Tiket::all();
        $tiket = collect($tikets)->firstWhere('id_tiket', $transaksi->id_tiket);

        return view('frontend.user.checkout',  compact('transaksi', 'tiket'));
    }

    public function success(Transaksi $transaksi)
    {
        $transaksi->payment_status = 'completed';
        $transaksi->save();

        return view('frontend.user.success', compact('transaksi'));
    }
}
