<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleado', function (Blueprint $table) {
            $table->integer('idEmpleado')->unsigned();;
            $table->foreign('idEmpleado')->references('idPersona')->on('Persona');
            $table->string('usuario')->unique();
            $table->string('correo')->unique();
            $table->string('password');
            $table->integer('estado');
            $table->integer('privilegios');
            $table->integer('idSucursal')->unsigned();
            $table->foreign('idSucursal')->references('idSucursal')->on('Sucursal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Empleado');
    }
}
