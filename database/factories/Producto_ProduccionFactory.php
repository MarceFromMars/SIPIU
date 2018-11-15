<?php

use Faker\Generator as Faker;

$factory->define(App\Producto_Produccion::class, function (Faker $faker) {
    return [
	'id_producto' => $faker->numberBetween(1,10),
	'id_produccion' => $faker->numberBetween(1,10),
	'nombre' => $faker->word,
	'id_linea' => $faker->numberBetween(1,10),
	'comentario' => $faker->paragraph,
    ];
});
