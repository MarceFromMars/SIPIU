<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutoriaMultivalor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoria_multivalor', function (Blueprint $table){
            $table->integer('id_tutoria')->unsigned();
            $table->foreign('id_tutoria')->references('id')->on('tutoria');
            $table->string('nombre');
            $table->text('actividad');
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
        Schema::create('tutoria_multivalor');
    }
}
