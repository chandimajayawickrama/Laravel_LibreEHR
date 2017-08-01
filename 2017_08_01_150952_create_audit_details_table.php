<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_details',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrement('id');
			$table->string('table_name',100);
			$table->string('field_name',100);
			$table->text('field_value');
			$table->bigInteger('audit_master_id');
			$table->string('entry_identification',255);
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
        Schema::drop('audit_details');
    }
}
