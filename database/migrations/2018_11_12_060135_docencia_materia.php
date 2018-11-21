<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocenciaMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia_materia', function (Blueprint $table){
            $table->integer('id_docencia')->unsigned();
            $table->foreign('id_docencia')->references('id')->on('docencia');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id')->on('materias');
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
        Schema::dropIfExists('docencia_materia');
    }
}
