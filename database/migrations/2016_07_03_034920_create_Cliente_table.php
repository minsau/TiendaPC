<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            $table->integer('idCliente')->unsigned();
            $table->foreign('idCliente')->references('idPersona')->on('Persona');
            $table->string('usuario')->unique();
            $table->string('correo')->unique();
            $table->string('password');
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Cliente');
    }
}
