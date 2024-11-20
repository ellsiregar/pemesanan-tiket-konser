<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diskon;
use App\Models\TiketDiskon;
use Illuminate\Http\Request;

class TiketDiskonController extends Controller
{
    public function tiket_diskon() {
        $tiketDiskons = TiketDiskon::all();
        return view('backend.admin.tiket_diskon', compact('tiketDiskons'));
    }
}
