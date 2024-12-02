<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    protected $table = 'konser';
    protected $primaryKey = 'id_konser';

    protected $fillable = [
        'nama_konser',
        'nama_artis_band',
        'lokasi',
        'tanggal_konser',
        'waktu_konser',
        'deskripsi',
        'foto',
    ];

    public function KategoriTiket(){
        return $this->hasMany(KategoriTiket::class, 'id_konser', 'id_konser');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'id_konser', 'id_konser');
    }
}
