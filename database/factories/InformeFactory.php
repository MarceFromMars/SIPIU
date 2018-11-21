<?php

use Faker\Generator as Faker;

$factory->define(App\Informe::class, function (Faker $faker) {
    return [
	'id_profesor' => $faker->numberBetween(1,10),
	'id_plan' => $faker->numberBetween(1,10),
	'fecha' => $faker->date,
    ];
});
