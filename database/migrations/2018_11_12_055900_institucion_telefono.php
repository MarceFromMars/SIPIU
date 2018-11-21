<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstitucionTelefono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion_telefono', function (Blueprint $table){
            $table->integer('id_institucion')->unsigned();
            $table->foreign('id_institucion')->references('id')->on('info_institucion');
            $table->string('telefono')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institucion_telefono');
    }
}
