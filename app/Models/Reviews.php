<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $primaryKey = 'id_review';

    protected $fillable = [
        'id_riview',
        'rating',
        'comment',

    ];
}
