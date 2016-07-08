<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoProgramacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_programacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('video_id')->unsigned();
            $table->integer('programacion_id')->unsigned();
            $table->dateTime('fechavideoinicio')->nullable();
            $table->foreign('programacion_id')
                  ->references('id')
                  ->on('programacion');
            $table->foreign('video_id')
                  ->references('id')
                  ->on('video');
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
        Schema::drop('video_programacion');
    }
}
