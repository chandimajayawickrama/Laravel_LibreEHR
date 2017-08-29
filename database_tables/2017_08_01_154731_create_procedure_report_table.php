<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_report', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('procedure_report_id');
			$table->bigInteger('procedure_order_id');
			$table->integer('procedure_order_seq');
			$table->dateTime('date_collected');
			$table->string('date_collected_tz',5);
			$table->dateTime('date_report');
			$table->string('date_report_tz',5);
			$table->bigInteger('source')->default(0);
			$table->string('specimen_num',63);
			$table->string('report_status',31);
			$table->string('review_status',31);
			$table->text('report_notes');
			$table->primary('procedure_report_id');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_report');
    }
}
