<?php

use Faker\Generator as Faker;

$factory->define(App\Periodos::class, function (Faker $faker) {
    return [
	'fecha_inicio' => $faker->date ,
	'fecha_fin' => $faker->date,
    ];
});
