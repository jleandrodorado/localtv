<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioProgramacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_programacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('programacion_id')->unsigned();
            $table->date('fechaprogramada')->nullable();
            $table->timestamps();
            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('usuarios');
            $table->foreign('programacion_id')
                  ->references('id')
                  ->on('programacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_programacion');
    }
}
