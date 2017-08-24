<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormClinicalInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_clinical_instructions',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->bigInteger('pid');
			$table->string('encounter',255);
			$table->string('user',255);
			$table->text('instruction');
			$table->timestamp('date');
			$table->boolean('activity');
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
        Schema::drop('form_clinical_instructions');
    }
}
