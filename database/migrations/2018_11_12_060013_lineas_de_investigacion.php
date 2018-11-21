<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LineasDeInvestigacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_de_investigacion', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_div')->unsigned();
            $table->foreign('id_div')->references('id')->on('division');
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
        Schema::dropIfExists('Lineas_de_investigacion');
    }
}
