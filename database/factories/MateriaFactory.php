<?php

use Faker\Generator as Faker;

$factory->define(App\Materia::class, function (Faker $faker) {
    return [
	'nombre' => $faker->word,
	'id_div' => $faker->numberBetween(1,10),
    ];
});
