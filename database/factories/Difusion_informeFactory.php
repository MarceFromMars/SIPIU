<?php

use Faker\Generator as Faker;

$factory->define(App\Difusion_informe::class, function (Faker $faker) {
    return [
        'id_difusion' => $faker->numberBetween(1,10),
		'id_informe' => $faker->numberBetween(1,10),
		'id_periodo' => $faker->numberBetween(1,10),
    ];
});
