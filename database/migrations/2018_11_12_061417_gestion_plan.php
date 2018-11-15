<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GestionPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_plan', function (Blueprint $table){
            $table->integer('id_gestion')->unsigned();
            $table->foreign('id_gestion')->references('id')->on('gestion');
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id')->on('plan');
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
        Schema::dropIfExist('gestion_plan');
    }
}
