<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Colonia', function (Blueprint $table) {
            $table->increments('idColonia')->unique();
            $table->string('descripcion',50);
            $table->integer('idMunicipio')->unsigned();
            $table->foreign('idMunicipio')->references('idMunicipio')->on('Municipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Colonia');
    }
}
