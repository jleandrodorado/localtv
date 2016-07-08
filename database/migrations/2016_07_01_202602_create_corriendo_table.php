<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorriendoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corriendo', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('video_id')->unsigned();
            $table->integer('tiempotranscurrido')->unsigned();
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
        Schema::drop('corriendo');
    }
}
