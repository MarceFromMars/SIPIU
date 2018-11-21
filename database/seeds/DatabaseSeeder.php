<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	$this->call(TipoUsuarioSeeder::class);
        $this->call(TipoTutoriaSeeder::class);

        factory('App\Division',10)->create();


        factory('App\User')->create([
        'nombre' => 'ROOT',
        'username' => 'Root',
        'password' => bcrypt('csrftokenmiss'),
        ]);
        
    }
}
