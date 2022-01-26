<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'art_name' => $faker -> name(),
        'date_birthday' => $faker -> date(),
        'email' => $faker->email(),
        'dateOfBirth' => $faker -> date(),
        'bio' => $faker->text(100)
    ];
});
