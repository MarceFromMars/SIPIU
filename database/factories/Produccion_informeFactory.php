<?php

use Faker\Generator as Faker;

$factory->define(App\Produccion_informe::class, function (Faker $faker) {
    return [
	'id_produccion' => $faker->numberBetween(1,10),
	'id_informe' => $faker->numberBetween(1,10),
    ];
});
