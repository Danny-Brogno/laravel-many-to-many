<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {

    return [
      "model" => $faker -> word,
      "horse_power" => $faker -> numberBetween(50, 100),
      "price" => $faker -> numberBetween(1000, 10000)

    ];
});
