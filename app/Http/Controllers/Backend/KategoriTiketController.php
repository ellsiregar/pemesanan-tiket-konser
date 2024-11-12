<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KategoriTiket;
use Illuminate\Http\Request;

class KategoriTiketController extends Controller
{
    public function tiket_kategori()
    {
        $KategoriTikets = KategoriTiket::all();
        return view('backend.admin.tiket_kategori', compact('KategoriTikets'));
    }
}
