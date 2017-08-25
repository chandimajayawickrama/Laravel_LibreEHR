<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_procedures',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->integer('ep_id');
			$table->date('ep_date');
			$table->string('ep_code_type',20);
			$table->string('ep_code',9);
			$table->integer('ep_pid');
			$table->integer('ep_encounter');
			$table->text('ep_code_text');
			$table->string('ep_facility_id',255);	
			$table->string('ep_external_id',255);	
			$table->primary('ep_id');	
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('external_procedures');
    }
}
