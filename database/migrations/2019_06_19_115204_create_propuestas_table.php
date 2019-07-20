<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreProyecto')->unique();
            $table->string('subProyecto');
            $table->string('bancoProyecto');
            $table->unsignedDecimal('metaProyecto', 12, 2);
            $table->unsignedInteger('tiempoProyecto');
            $table->string('portadaProyecto');
            $table->string('tipoProyecto');
            $table->longText('descripcionProyecto');
            $table->tinyInteger('estadoProyecto');
            $table->date('comienzoProyecto')->nullable();
            $table->date('finalProyecto')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('comentarioProyecto')->nullable();;
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
        Schema::dropIfExists('propuestas');
    }
}
