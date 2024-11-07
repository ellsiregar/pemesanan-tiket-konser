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
}
