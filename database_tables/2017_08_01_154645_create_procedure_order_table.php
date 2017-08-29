<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_order', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('procedure_order_id')->default(0);
			$table->bigInteger('provider_id')->default(0);
			$table->bigInteger('patient_id');
			$table->bigInteger('encounter_id')->default(0);
			$table->dateTime('date_collected');
			$table->date('date_ordered');
			$table->string('order_priority',31);
			$table->string('order_status',31);
			$table->text('patient_instructions');
			$table->boolean('activity')->default(1);
			$table->string('control_id',255);
			$table->bigInteger('lab_id')->default(0);
			$table->string('specimen_type',31);
			$table->string('specimen_location',31);
			$table->string('specimen_volume',30);
			$table->dateTime('date_transmitted');
			$table->string('clinical_hx',255);
			$table->string('external_id',20);
			$table->primary('procedure_order_id');
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_order');
    }
}
