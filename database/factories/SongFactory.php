<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'duration' => $faker -> numberBetween(30, 600),
        'lyric' => $faker -> text(300),
        'publication_date' => $faker -> date(),
        'rating' => $faker -> numberBetween(0, 10)
    ];
});
