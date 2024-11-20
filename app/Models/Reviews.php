<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $primaryKey = 'id_review';

    protected $fillable = [
        'id_konser',
        'users_id',
        'rating',
        'comment',
        'riview_date',
    ];

    public function konser()
    {
        return $this->belongsTo(Konser::class, 'id_konser', 'id_konser');
    }

    /**
     * Relasi dengan model User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
