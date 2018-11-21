<?php

use Faker\Generator as Faker;
use App\Tipo_usuario;

$factory->define(App\Tipo_usuario::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->sentence,
    ];
});
