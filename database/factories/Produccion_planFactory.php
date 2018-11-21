<?php

use Faker\Generator as Faker;

$factory->define(App\Produccion_plan::class, function (Faker $faker) {
    return [
	'id_produccion' => $faker->numberBetween(1,10),
	'id_plan' => $faker->numberBetween(1,10),
    ];
});
