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
    ];

    public function KategoriTiket(){
        return $this->belongsTo(KategoriTiket::class, 'id_kategori_tiket', 'id_kategori_tiket');
    }
    
    public function SeatAllocations(){
        return $this->hasMany(SeatAllocations::class, 'id_lokasi', '	id_lokasi');
    }

    public function tiketDiskon()
    {
        return $this->hasMany(TiketDiskon::class, 'id_tiket', 'id_tiket');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_tiket', 'id_tiket');
    }
}

