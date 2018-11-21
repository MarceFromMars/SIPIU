<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoProduccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_produccion', function (Blueprint $table){
            $table->increments('id_producto');
            $table->unsignedInteger('id_produccion');
            $table->foreign('id_produccion')->references('id')->on('produccion');
            $table->string('nombre');
            $table->unsignedInteger('id_linea');
            $table->foreign('id_linea')->references('id')->on('lineas_de_investigacion');
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
        Schema::create('producto_produccion');
    }
}
