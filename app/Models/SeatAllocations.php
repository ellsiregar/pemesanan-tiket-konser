<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatAllocations extends Model
{
    protected$table ='SeatAllocations';
    protected $primaryKey = 'id_lokasi';

    protected$fillable = [
        'order_id',
        'nomor_tempat_duduk',
    ];
}
