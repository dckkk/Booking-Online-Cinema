<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_payment', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_ticket');
                $table->foreign('payment_ticket')->references('id')->on('tb_ticket')->onDelete('cascade');
            $table->string('payment_name');
            $table->string('payment_bank');
            $table->string('payment_invoice');
            $table->string('payment_user');
            $table->integer('payment_total');
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
        Schema::drop('tb_payment');
    }
}
