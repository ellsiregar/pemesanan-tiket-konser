<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use App\Models\Transaksi;
use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function checkout(Request $request)
    {
        $data = $request->all();

        $transaksi = Transaksi::create([
            'users_id' => Auth::user()->users_id,
            'id_tiket' => $data['id_tiket'],
            'payment_method' => 'bitcoin',
            'amount' => $data['amount'],
            'payment_status' => 'pending',
            'transaction_date' => now(),
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['amount'],
            ),
            'custemer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaksi->snap_token = $snapToken;
        $transaksi->save();

        return redirect()->route('', $transaksi->id_transaksi);
    }
}
