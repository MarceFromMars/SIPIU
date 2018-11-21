<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido_p' => $faker->lastName,
        'apellido_m' => $faker->lastName,
        'fecha_nac' => $faker->date,
        'tipo' => $faker->numberBetween(1,4),
        'username' => $faker->userName,
        'password' => $faker->password,
        'id_div' => $faker->numberBetween(1,10),
    ];
});