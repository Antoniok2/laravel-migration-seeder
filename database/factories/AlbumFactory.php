<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'album' => $faker -> name(),
        'creation_album' => $faker -> date(),
        'publication_album' => $faker -> date(),
        'views' => $faker->numberBetween(0, 100000),
        'sells' => $faker->numberBetween(0, 100),
        'cover' => $faker -> name()
    ];
});
