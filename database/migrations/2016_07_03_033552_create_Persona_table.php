<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->increments('idPersona')->unique();
            $table->string('nombres',150);
            $table->string('aPaterno',150);
            $table->string('aMaterno',150);
            $table->string('telefono',15);
            $table->string('tipo',45);
            $table->integer('idDireccion')->unsigned();
            $table->foreign('idDireccion')->references('idDireccion')->on('Direccion');
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
        Schema::drop('Persona');
     }
}
