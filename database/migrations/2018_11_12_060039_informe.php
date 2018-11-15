<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Informe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')->references('id')->on('users');
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id')->on('plan');
            $table->year('fecha');
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
        Schema::dropIfExists('informe');
    }
}
