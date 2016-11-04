<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('customer_transactions', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->dateTime('time_in');
        //     $table->dateTime('time_out');
        //     //$table->foreign('customer_id')->references('id')->on('customers'); 
        //     $table->boolean('paid')->default(1); 
        //     $table->integer('rate')->default(0);   
        //     $table->timestamps('total_amount');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_transactions');
    }
}
