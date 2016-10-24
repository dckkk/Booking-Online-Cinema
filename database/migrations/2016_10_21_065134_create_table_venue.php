<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVenue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_venue', function(Blueprint $table){
            $table->increments('id');
            $table->integer('venue_movies')->unsigned();
                $table->foreign('venue_movies')->references('id')->on('tb_movies')->onDelete('cascade');
            $table->string('venue_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_venue');
    }
}
