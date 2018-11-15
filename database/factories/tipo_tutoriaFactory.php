<?php

use Faker\Generator as Faker;

$factory->define(App\tipo_tutoria::class, function (Faker $faker) {
    return [
	'descripcion' => $faker->paragraph,
    ];
});
