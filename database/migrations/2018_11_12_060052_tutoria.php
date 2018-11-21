<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoria', function (Blueprint $table){
            $table->increments('id');
            $table->integer('tipo')->unsigned();
            $table->foreign('tipo')->references('id')->on('tipo_tutoria');
            $table->integer('horas')->unsigned();
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
        Schema::dropIfExists('tutoria');
    }
}
