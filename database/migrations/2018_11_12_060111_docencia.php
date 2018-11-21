<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia', function (Blueprint $table){
            $table->increments('id');
            $table->integer('periodo')->unsigned();
            $table->foreign('periodo')->references('id')->on('periodos');
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
        Schema::dropIfExists('docencia');
    }
}
