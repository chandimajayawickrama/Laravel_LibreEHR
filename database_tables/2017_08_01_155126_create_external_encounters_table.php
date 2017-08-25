<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_encounters',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('ee_id');
			$table->date('ee_date');
			$table->integer('ee_pid');
			$table->string('ee_provider_id',255);
			$table->string('ee_facility_id',255);
			$table->string('ee_encounter_diagnosis',255);
			$table->string('ee_external_id',255);
			$table->primary('ee_id');
			
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('external_encounters');
    }
}
