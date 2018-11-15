<?php

use Faker\Generator as Faker;

$factory->define(App\Superacion_academica_plan::class, function (Faker $faker) {
    return [
	'id_superacion_academica' => $faker->numberBetween(1,10),
	'id_plan' => $faker->numberBetween(1,10),
    ];
});
