<?php

use Illuminate\Database\Seeder;

class TipoTutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\tipo_tutoria')->create([
        	'descripcion' => 'Alumnal'
        ]);
        factory('App\tipo_tutoria')->create([
        	'descripcion' => 'Grupal'
        ]);
    }
}
