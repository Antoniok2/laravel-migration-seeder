<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'art_name',
        'date_birthday',
        'email',
        'dateOfBirth',
        'bio'
    ];
}
