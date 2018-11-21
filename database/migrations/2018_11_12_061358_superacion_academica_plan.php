<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuperacionAcademicaPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superacion_academica_plan', function (Blueprint $table){
            $table->integer('id_superacion_academica')->unsigned();
            $table->foreign('id_superacion_academica')->references('id')->on('superacion_academica');
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id')->on('plan');
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
        Schema::dropIfExist('superacion_academica_plan');
    }
}
