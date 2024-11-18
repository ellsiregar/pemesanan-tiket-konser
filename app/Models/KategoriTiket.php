<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriTiket extends Model
{
    protected $table = 'kategori_tiket';
    protected $primaryKey = 'id_kategori_tiket';

    protected $fillable = [
        'id_konser',
        'nama_kategori',
    ];

    public function Konser(){
        return $this->belongsTo(Konser::class, 'id_konser', 'id_konser');
    }

    public function Tiket(){
        return $this->hasMany(Tiket::class, 'id_tiket', 'id_tiket');
    }

    public function SeatAllocations(){
        return $this->hasMany(SeatAllocations::class, 'id_lokasi', '	id_lokasi');
    }
   
}
