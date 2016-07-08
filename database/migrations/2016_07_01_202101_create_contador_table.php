<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contador', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('video_id')->unsigned();
            $table->integer('contador')->unsigned();
            $table->date('fecha')->nullable();
            $table->timestamps();
            $table->foreign('video_id')
                  ->references('id')
                  ->on('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contador');
    }
}
