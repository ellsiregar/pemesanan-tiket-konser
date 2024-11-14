<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 'id_tiket';

    protected $fillable =[
        'order_id',
        'users_id',
        'id_kategori_tiket',
        'quantity',
        'status',


    ];

    public function User(){
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }

    public function KategoriTiket(){
        return $this->belongsTo(User::class, 'id_kategori_tiket', 'id_kategori_tiket');
    }
}
