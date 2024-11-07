<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    protected $table = 'konser';
    protected $primarykey = 'id_konser';

    protected $fillable = [
        'nama_konser',
        'nama_artis_ben',
        'lokasi',
        'tanggal_konser',
        'waktu_konser',
        'deskripsi',
    ];

}
