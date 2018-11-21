<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuperacionAcademicaMultivalor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superacion_multivalor', function (Blueprint $table){
            $table->integer('id_superacion')->unsigned();
            $table->foreign('id_superacion')->references('id')->on('superacion_academica');
            $table->string('institucion');
            $table->text('actividad');
            $table->string('programa');
            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references('id')->on('periodos');
            $table->text('comentario')->nulleable();
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
        Schema::create('superacion_multivalor');
    }
}
