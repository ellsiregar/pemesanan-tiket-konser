<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
<<<<<<< HEAD
use App\Models\Transaksi;
=======
use App\Models\Diskon;
>>>>>>> 92b374731a9672e4c410d1c57cd32d7c2379dbe4
use Illuminate\Http\Request;

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

        $diskons = Diskon::all(['diskon_kode', 'persentase_diskon']);
        // Konversi persentase_diskon menjadi angka tanpa simbol %
        $diskons = $diskons->map(function ($diskon) {
            $diskon->persentase_diskon = (int) filter_var($diskon->persentase_diskon, FILTER_SANITIZE_NUMBER_INT);
            return $diskon;
        });

        return view('frontend.user.shopping_cart', compact('konser', 'tiket', 'diskons'));
    }

    public function chekout(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:10',
        ]);

        $transaksi = Transaksi::create([
            'nama'=> $request->nama,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return view('', compact('transaksi'));

    }

}
