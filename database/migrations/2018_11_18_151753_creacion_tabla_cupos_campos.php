<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablaCuposCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('cupos', function (Blueprint $table) {
            $table->Integer('paralelos_cant')->nullable();
            $table->Integer('nivel')->nullable();
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
        Schema::table('cupos', function (Blueprint $table) {
            $table->dropColumn('paralelos_cant');
            $table->dropColumn('nivel');
        });
    }
}
