<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompIdToCustomerTypeTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('customers', function($table)
        {
            //$table->boolean('active')->default(1);
            //$table->foreign('company_id')->references('id')->on('companies');  
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
       //$table->dropColumn('active'); 
    }
}