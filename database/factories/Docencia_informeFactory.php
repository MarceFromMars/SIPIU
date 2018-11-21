<?php

use Faker\Generator as Faker;

$factory->define(App\Docencia_informe::class, function (Faker $faker) {
    return [
	'id_docencia' => $faker->numberBetween(1,10),
	'id_informe' => $faker->numberBetween(1,10),
	'id_periodo' => $faker->numberBetween(1,10),
    ];
});
