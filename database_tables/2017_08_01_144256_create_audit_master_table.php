<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_master',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('id');
			$table->bigInteger('pid');
			$table->bigInteger('user_id');
			$table->tinyInteger('approval_status');
			$table->text('comments');
			$table->timestamp('created_time');
			$table->timestamp('modified_time');
			$table->string('ip_address',200);
			$table->typeInteger('type');
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
        Schema::drop('audit_master');
    }
}
