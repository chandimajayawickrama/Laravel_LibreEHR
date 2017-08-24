<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmcMiscDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amc_misc_data',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('amc_id',31);
			$table->bigInteger('pid');
			$table->string('map_category',255);
			$table->bigInteger('map_id');
			$table->dateTime('date_created');
			$table->dateTime('date_completed');
			$table->primary('amc_id','pid','map_id');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amc_misc_data');
    }
}
