<?php

use Faker\Generator as Faker;

$factory->define(App\Superacion_academica::class, function (Faker $faker) {
    return [
	'horas' => $faker->numberBetween(1,15),
    ];
});
