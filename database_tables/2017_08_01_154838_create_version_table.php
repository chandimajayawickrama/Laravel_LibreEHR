<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('version', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->integer('v_major')->default(0);
			$table->integer('v_minor')->default(0);
			$table->integer('v_patch')->default(0);
			$table->integer('v_realpatch')->default(0);
			$table->string('v_tag',31);
			$table->integer('v_database')->default(0);
			$table->integer('v_acl')->default(0);
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('version');
    }
}
