<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskon';
    protected $primaryKey = 'id_diskon';

    protected $fillable = [
        'id_tiket',
        'diskon_kode',
        'persentase_diskon',
        'tanggal_kadaluarsa',
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket', 'id_tiket');
    }
    public function tiketDiskon()
    {
        return $this->hasMany(TiketDiskon::class, 'id_diskon', 'id_diskon');
    }

}
