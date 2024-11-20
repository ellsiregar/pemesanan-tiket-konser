<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatAllocations extends Model
{
    protected $table ='seat_allocations';
    protected $primaryKey = 'id_lokasi';

    protected$fillable = [
        'id_tiket',
        'nomor_tempat_duduk',
    ];

    public function KategoriTiket(){
        return $this->belongsTo(KategoriTiket::class, 'id_ketegori_tiket', 'id_ketegori_tiket');
    }

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket', 'id_tiket');
    }

    public function transaksi()
{
    return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi');
}
}
