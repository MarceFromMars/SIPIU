<?php

use Faker\Generator as Faker;

$factory->define(App\Linea_de_investigacion::class, function (Faker $faker) {
    return [
	'nombre' => $faker->word,
	'id_div' => $faker->numberBetween(1,10),
    ];
});
