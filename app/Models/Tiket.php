<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 'id_tiket';

    protected $fillable =[
        'id_kategori_tiket',
        'quantity',
        'harga_tiket',
        'status',


    ];

    public function KategoriTiket(){
        return $this->belongsTo(KategoriTiket::class, 'id_kategori_tiket', 'id_kategori_tiket');
    }
}
