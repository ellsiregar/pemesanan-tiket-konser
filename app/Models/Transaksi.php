<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'users_id',
        'id_tiket',
        'payment_method',
        'payment_status',
        'transaction_date',
        'amount',
        'snap_token',
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket', 'id_tiket');
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocations::class, 'id_transaksi', 'id_transaksi');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
