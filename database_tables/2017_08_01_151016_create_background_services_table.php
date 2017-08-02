<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackgroundServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('background_services',function(Blueprint $table){
			$table->=engine = 'InnoDB';
			$table->string('name',31);
			$table->string('title',127);
			$table->boolean('active')->default(0);
			$table->tinyInteger('running')->default(-1);
			$table->timstamp('next_run');
			$table->integer('execute_interval')->default(0);
			$table->string('function',127);
			$table->string('require_once',255);
			$table->integer('sort_order');
			$table->primary('name');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('background_services');
    }
}
