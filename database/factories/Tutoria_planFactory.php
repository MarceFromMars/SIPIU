<?php

use Faker\Generator as Faker;

$factory->define(App\Tutoria_plan::class, function (Faker $faker) {
    return [
	'id_tutoria' => $faker->numberBetween(1,10),
	'id_plan' => $faker->numberBetween(1,10),
	'id_periodo' => $faker->numberBetween(1,10),
    ];
});
