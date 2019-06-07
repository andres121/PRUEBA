<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            //nombres, cedula, celular, dirección, ciudad
            $table->integer('departamento_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->integer('agente_id')->unsigned();

            $table->string('nombre', 120);
            $table->string('cedula', 120);
            $table->string('celular', 120);
            $table->string('dirección', 120);

            $table->timestamps();

            $table->foreign('departamento_id')->references('dep_id')->on('departamentos');
            $table->foreign('ciudad_id')->references('ciu_id')->on('ciudads');
            $table->foreign('agente_id')->references('age_id')->on('agentes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
