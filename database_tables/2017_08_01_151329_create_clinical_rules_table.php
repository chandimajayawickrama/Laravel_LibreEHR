<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::creat('clinical_rules',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('id',31);
			$table->bigInteger('pid');
			$table->tinyInteger('active_alert_flag');
			$table->tinyInteger('passive_alert_flag');
			$table->tinyInteger('cqm_flag');
			$table->tinyInteger('cqm_2011_flag');
			$table->tinyInteger('cqm_2014_flag');
			$table->string('cqm_nqf_code',10);
			$table->string('cqm_pqri_code',10);
			$table->tinyInteger('amc_flag');
			$table->tinyInteger('amc_2011_flag');
			$table->tinyInteger('amc_2014_flag');
			$table->string('amc_code',10);
			$table->string('amc_code_2014',30);
			$table->tinyInteger('amc_2014_stage1_flag');
			$table->tinyInteger('amc_2014_stage2_flag');
			$table->tinyInteger('patient_reminder_flag');
			$table->string('developer',255);
			$table->string('funding_source',255);
			$table->string('release_version',255);
			$table->string('web_reference',255);
			$table->string('access_control',255);
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
        Schema::drop('clinical_rules');
    }
}
