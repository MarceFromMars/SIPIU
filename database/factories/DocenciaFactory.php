<?php

use Faker\Generator as Faker;

$factory->define(App\Docencia::class, function (Faker $faker) {
    return [
	'periodo' => $faker->numberBetween(1,3),
	'horas' => $faker->numberBetween(1,15),
    ];
});
