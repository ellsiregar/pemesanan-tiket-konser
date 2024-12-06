<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Konser;
use App\Models\Tiket;
use App\Models\Diskon;
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

    public function checkout($id, $id_tiket) {
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


        return view('frontend.user.checkout', compact('konser', 'tiket'));
    }
}
