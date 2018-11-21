<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocenciaPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia_plan', function (Blueprint $table){
            $table->integer('id_docencia')->unsigned();
            $table->foreign('id_docencia')->references('id')->on('docencia');
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
        Schema::dropIfExist('docencia_plan');
    }
}
