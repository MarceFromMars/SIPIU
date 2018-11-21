<?php

use Faker\Generator as Faker;

$factory->define(App\Superacion_academica_informe::class, function (Faker $faker) {
    return [
	'id_superacion' => $faker->numberBetween(1,10),
	'id_informe' => $faker->numberBetween(1,10),
    ];
});
