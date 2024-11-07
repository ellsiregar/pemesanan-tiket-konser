<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiketDiskon extends Model
{
    protected $table = 'tiket_diskon';

    protected $primaryKey = 'id_tiket_diskon';

    protected $fillable = [
        'id_tiket_diskon',
        'appliad_date',
    ];
}
