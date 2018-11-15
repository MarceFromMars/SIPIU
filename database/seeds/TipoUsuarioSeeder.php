<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tipo_usuario::class)->create([
        	'descripcion' => 'Administrador',
        ]);
        factory(App\Tipo_usuario::class)->create([
        	'descripcion' => 'Director',
        ]);
        factory(App\Tipo_usuario::class)->create([
        	'descripcion' => 'Profesor',
        ]);
        factory(App\Tipo_usuario::class)->create([
        	'descripcion' => 'Administrativo',
        ]);
    }
}
