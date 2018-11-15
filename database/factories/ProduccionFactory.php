<?php

use Faker\Generator as Faker;

$factory->define(App\Produccion::class, function (Faker $faker) {
    return [
	'horas' => $faker->numberBetween(1,15),
    ];
});
