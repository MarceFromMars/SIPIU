<?php

use Faker\Generator as Faker;

$factory->define(App\Docencia_materia::class, function (Faker $faker) {
    return [
	'id_docencia' => $faker->numberBetween(1,10),
	'id_materia' => $faker->numberBetween(1,10),
    ];
});
