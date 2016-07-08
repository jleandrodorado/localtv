<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispositivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dispositivo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('token')->nullable();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();
            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dispositivo');
    }
}
