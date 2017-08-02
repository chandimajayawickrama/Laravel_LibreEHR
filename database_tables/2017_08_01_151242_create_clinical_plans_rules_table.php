<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalPlansRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_plans_rules',fucntion(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('plan_id',31);
			$table->string('rule_id',31);
			$table->primary(array('plan_id','rule_id'));
			
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clinical_plans_rules');
    }
}
