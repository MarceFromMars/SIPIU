<?php

use Faker\Generator as Faker;

$factory->define(App\Info_institucion::class, function (Faker $faker) {
    return [
    'num_periodos' => $faker->numberBetween(1,3),
	'nombre' => $faker->company,
	'fecha_plan_ini' => $faker->date,
	'fecha_plan_fin' => $faker->date,
	'fecha_info_ini' => $faker->date,
	'fecha_info_fin' => $faker->date,
	'tutoria' => $faker->numberBetween(1,3),
    ];
});
