<?php

use Faker\Generator as Faker;

$factory->define(App\Tutoria::class, function (Faker $faker) {
    return [
	'tipo' => $faker->numberBetween(1,10),
	'horas' => $faker->numberBetween(1,15),
    ];
});
