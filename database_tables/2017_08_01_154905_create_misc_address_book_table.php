<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscAddressBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misc_address_book',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('id');
			$table->string('fname',255);
			$table->string('mname',255);
			$table->string('lname',255);
			$table->string('street',60);
			$table->string('city',30);
			$table->string('state',30);
			$table->string('zip',20);
			$table->string('phone',30);
			$table->primary('id');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('misc_address_book')'
    }
}
