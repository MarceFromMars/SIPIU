<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DifusionMultivalor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('difusion_multivalor', function (Blueprint $table){
            $table->integer('id_difusion')->unsigned();
            $table->foreign('id_difusion')->references('id')->on('difusion');
            $table->string('nombre');
            $table->text('actividad');
            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references('id')->on('periodos');
            $table->text('comentario')->nulleable();
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
        Schema::create('difusion_multivalor');
    }
}
