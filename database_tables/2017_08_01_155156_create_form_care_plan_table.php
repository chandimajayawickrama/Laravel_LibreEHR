<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormCarePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_care_plan',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigInteger('id');
			$table->date('date');
			$table->string('encounter',255);
			$table->string('user',255);
			$table->string('groupname',255);
			$table->tinyInteger('authorized');
			$table->tinyInteger('activity');
			$table->string('code',255);
			$table->text('codetext');
			$table->text('description');
			$table->string('external_id',30);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_care_plan');
    }
}
