<?php

use Faker\Generator as Faker;

$factory->define(App\Difusion_Multivalor::class, function (Faker $faker) {
    return [
		'id_difusion' => $faker->numberBetween(1,10),
		'nombre' => $faker->word,
		'actividad' => $faker->sentence,
		'id_periodo' => $faker->numberBetween(1,10),
		'comentario' => $faker->paragraph,
    ];
});
