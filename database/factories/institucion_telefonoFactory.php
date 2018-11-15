<?php

use Faker\Generator as Faker;

$factory->define(App\institucion_telefono::class, function (Faker $faker) {
    return [
	'id_institucion' => $faker->randomDigit,
	'telefono' => $faker->phoneNumber,
    ];
});
