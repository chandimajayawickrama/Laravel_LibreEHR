<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_plans',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('id',31);
			$table->bigInteger('pid')->default(0);
			$table->tinyInteger('normal_flag');
			$table->tinyInteger('cqm_flag');
			$table->tinyInteger('cqm_2011_flag');
			$table->tinyInteger('cqm_2014_flag');
			$table->string('cqm_measure_group',10);
			$table->primary(array('id','pid'));
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clinical_plans');
    }
}
