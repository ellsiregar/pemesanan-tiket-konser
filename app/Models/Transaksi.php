<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected$table ='transaksi';
    protected $primaryKey = 'id_transaksi';

    protected$fillable = [
        'order_id',
        'payment_method',
        'payment_status',
        'transaksi_date',
        'amount',
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket', 'id_tiket');
    }

    public function seatAllocations()
{
    return $this->hasMany(SeatAllocations::class, 'id_transaksi', 'id_transaksi');
}
}
