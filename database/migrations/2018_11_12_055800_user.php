<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->date('fecha_nac');
            $table->integer('tipo')->unsigned();
            $table->foreign('tipo')->references('id')->on('tipo_usuario');
            $table->string('username')->unique();
            $table->string('password')->unique();
            $table->integer('id_div')->unsigned();
            $table->foreign('id_div')->references('id')->on('division');
            $table->softDeletes();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
