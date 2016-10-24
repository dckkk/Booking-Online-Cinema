<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_movies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('movie_name');
            $table->string('movie_genre');
            $table->string('movie_produser');
            $table->string('movie_sutradara');
            $table->string('movie_artis');
            $table->string('movie_deskripsi');
            $table->integer('movie_durasi');
            $table->string('movie_poster');
            $table->string('movie_trailer');
            $table->string('movie_tayang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_post');
    }
}
