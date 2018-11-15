<?php

use Faker\Generator as Faker;

$factory->define(App\Tutoria_Multivalor::class, function (Faker $faker) {
    return [
	'id_tutoria' => $faker->numberBetween(1,10),
	'nombre' => $faker->word,
	'actividad' => $faker->sentence,
	'comentario' => $faker->paragraph,
    ];
});
