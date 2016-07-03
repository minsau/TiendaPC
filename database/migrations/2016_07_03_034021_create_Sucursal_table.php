<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sucursal', function (Blueprint $table) {
            $table->increments('idSucursal')->unique();
            $table->string('nombreSucursal',100);
            $table->integer('idDireccion')->unsigned();
            $table->foreign('idDireccion')->references('idDireccion')->on('Direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Sucursal');
    }
}
