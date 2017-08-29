<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureOrderCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_order_code', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigInteger('procedure_order_id');
			$table->increment('procedure_order_seq');
			$table->string('procedure_code',31);
			$table->string('procedure_name',255);
			$table->char('procedure_source',1);
			$table->text('diagnoses');
			$table->boolean('do_not_send')->default(0);
			$table->string('procedure_order_title',255);
			$table->primary(['procedure_order_seq','procedure_order_id']);
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_order_code');
    }
}
