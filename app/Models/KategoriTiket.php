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
        'harga_tiket',
        'jumlah_tiket',
    ];

    public function Konser(){
        return $this->belongsTo(Konser::class, 'id_konser', 'id_konser');
    }
}
