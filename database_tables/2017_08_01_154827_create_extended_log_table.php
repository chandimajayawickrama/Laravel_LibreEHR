<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtendedLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extended_log',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('id');
			$table->dateTime('date');
			$table->string('event',255);
			$table->string('user',255);
			$table->string('recipient',255);
			$table->longText('description');
			$table->bigInteger('patient_id');
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
        Schema::drop('extended_log');
    }
}
