<?php

use Faker\Generator as Faker;

$factory->define(App\Superacion_academica_Multivalor::class, function (Faker $faker) {
    return [
	'id_superacion' => $faker->numberBetween(1,10),
	'institucion' => $faker->company,
	'actividad' => $faker->sentence,
	'programa' => $faker->sentence,
	'id_periodo' => $faker->numberBetween(1,10),
	'comentario' => $faker->paragraph,
    ];
});
