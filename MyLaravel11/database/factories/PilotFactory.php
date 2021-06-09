<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pilot;
use Faker\Generator as Faker;

$factory->define(Pilot::class, function (Faker $faker) {

    return [
      "firstname" => $faker -> firstname,
      "lastname" => $faker -> lastname,
      "age" => $faker -> numberBetween(18, 35)

    ];
});
