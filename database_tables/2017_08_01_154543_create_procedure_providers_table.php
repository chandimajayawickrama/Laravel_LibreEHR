<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_providers', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('ppid');
			$table->string('name',255);
			$table->string('npi',15);
			$table->string('send_app_id',255);
			$table->string('send_fac_id',255);
			$table->string('recv_app_id',255);
			$table->string('recv_fac_id',255);
			$table->char('DorP',1);
			$table->char('direction',1);
			$table->string('protocol',15);
			$table->string('remote_host',255);
			$table->string('login',255);
			$table->string('password',255);
			$table->string('orders_path',255);
			$table->string('results_path',255);
			$table->text('notes');
			$table->bigInteger('lab_director');
			$table->bigInteger('ppid');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_providers');
    }
}
