<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected$table ='diskon';
    protected $primaryKey = 'id_diskon';

    protected$fillable = [
        'order_id',
        'diskon_kode',
        'presentase_diskon',
        'tanggal_kadaluarsa',
    ];
}
