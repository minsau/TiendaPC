<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direccion', function (Blueprint $table) {
            $table->increments('idDireccion')->unique();
            $table->integer('idEstado')->unsigned();
            $table->integer('idMunicipio')->unsigned();
            $table->integer('idColonia')->unsigned();
            $table->foreign('idEstado')->references('idEstado')->on('Estado');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('Municipio');
            $table->foreign('idColonia')->references('idColonia')->on('Colonia');
            $table->string('complemento',70);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Direccion');
    }
}
