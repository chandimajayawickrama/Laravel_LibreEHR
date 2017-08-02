<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalRulesLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_rules_log',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrement('id');
			$table->timestamp('date');
			$table->bigInteger('pid')->default(0);
			$table->bigInteger('uid')->default(0);
			$table->string('category',255);
			$table->text('value');
			$table->text('new_value');
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
        Schema::drop('clinical_rules_log');
    }
}
