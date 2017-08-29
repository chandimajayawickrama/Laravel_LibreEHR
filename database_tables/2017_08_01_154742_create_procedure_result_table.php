<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_result',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('procedure_result_id');
			$table->bigInteger('procedure_report_id');
			$table->char('result_data_type',1);
			$table->string('result_code',31);
			$table->string('result_text',255);
			$table->dateTime('date');
			$table->string('facility',255);
			$table->string('units',255);
			$table->string('result',255);
			$table->string('range',255);
			$table->string('abnormal',31);
			$table->text('comments');
			$table->bigInteger('document_id')->default(0);
			$table->string('result_status',31);
			$table->primary('procedure_result_id');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('procedure_result');
    }
}
