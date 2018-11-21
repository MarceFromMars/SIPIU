<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuperacionAcademicaInforme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superacion_informe', function (Blueprint $table){
            $table->integer('id_superacion')->unsigned();
            $table->foreign('id_superacion')->references('id')->on('superacion_academica');
            $table->integer('id_informe')->unsigned();
            $table->foreign('id_informe')->references('id')->on('informe');
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
        Schema::dropIfExist('superacion_informe');
    }
}
