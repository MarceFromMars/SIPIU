<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DifusionInforme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difusion_informe', function (Blueprint $table){
            $table->integer('id_difusion')->unsigned();
            $table->foreign('id_difusion')->references('id')->on('difusion');
            $table->integer('id_informe')->unsigned();
            $table->foreign('id_informe')->references('id')->on('informe');
            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references('id')->on('periodos');
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
        Schema::dropIfExist('difusion_informe');
    }
}
