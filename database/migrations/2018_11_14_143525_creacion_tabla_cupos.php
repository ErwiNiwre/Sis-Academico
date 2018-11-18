<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaCupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad')->nullable(); 
            $table->bigInteger('carrera_id')->unsigned();
            $table->bigInteger('turno_id')->unsigned();
            $table->boolean('estado')->default(true);
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('cupos');
    }
}
