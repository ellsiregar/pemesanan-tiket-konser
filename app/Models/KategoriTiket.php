<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriTiket extends Model
{


    protected $table = 'kategoritiket';
    protected $primaryKey ='id_kategori_tiket';

    protected $fillable = [
        'id_konser',
        'nama_kategori',
        'harga_tiket',
        'jumlah_tiket',
    ];
}
