<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'duration',
        'lyric',
        'publication_date',
        'rating',
    ];
}
