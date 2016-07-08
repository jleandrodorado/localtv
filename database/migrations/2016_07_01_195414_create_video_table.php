<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('titulo')->nullable();
            $table->text('sinopsis')->nullable();
            $table->string('formato')->nullable();
            $table->string('genero')->nullable();
            $table->dateTime('horainicio')->nullable();
            $table->integer('duracion')->unsigned();
            $table->string('pais')->nullable();
            $table->string('urlvideo')->nullable();
            $table->string('urlimg')->nullable();
            $table->string('actores')->nullable();
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
        Schema::drop('video');
    }
}
