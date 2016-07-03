<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Municipio', function (Blueprint $table) {
            $table->increments('idMunicipio')->unique();
            $table->string('descripcion',50);
            $table->integer('idEstado')->unsigned();
            $table->foreign('idEstado')->references('idEstado')->on('Estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Municipio');
    }
}
