<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'album',
        'creation_album',
        'publication_album',
        'views',
        'sells',
        'cover'
    ];
}
