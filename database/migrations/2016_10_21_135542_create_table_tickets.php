<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tickets', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_venue')->unsigned();
                $table->foreign('ticket_venue')->references('id')->on('tb_venue')->onDelete('cascade');
            $table->integer('ticket_seat')->unsigned();
                $table->foreign('ticket_seat')->references('id')->on('tb_seat')->onDelete('cascade');
            $table->integer('ticket_harga')->unsigned();
                $table->foreign('ticket_harga')->references('id')->on('tb_harga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_ticket');
    }
}
