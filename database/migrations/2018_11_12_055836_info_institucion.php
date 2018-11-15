<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoInstitucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*El logo está pendiente*/
        Schema::create('info_institucion', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('num_periodos')->unsigned();
            $table->string('nombre');
            $table->date('fecha_plan_ini');
            $table->date('fecha_plan_fin');
            $table->date('fecha_info_ini');
            $table->date('fecha_info_fin');
            $table->integer('tutoria')->unsigned();
            $table->foreign('tutoria')->references('id')->on('tipo_tutoria');
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
        Schema::dropIfExists('info_institucion');
    }
}
