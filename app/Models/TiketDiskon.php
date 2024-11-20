<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiketDiskon extends Model
{
    protected $table = 'tiket_diskon';

    protected $primaryKey = 'id_tiket_diskon';

    protected $fillable = [
        'id_tiket',
        'id_diskon',
        'appliad_date',
    ];
    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket', 'id_tiket');
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'id_diskon', 'id_diskon');
    }
}
