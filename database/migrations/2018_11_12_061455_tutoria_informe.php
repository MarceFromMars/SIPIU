<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutoriaInforme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tutoria_informe', function (Blueprint $table){
            $table->integer('id_tutoria')->unsigned();
            $table->foreign('id_tutoria')->references('id')->on('tutoria');
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
        Schema::dropIfExist('tutoria_informe');
    }
}
