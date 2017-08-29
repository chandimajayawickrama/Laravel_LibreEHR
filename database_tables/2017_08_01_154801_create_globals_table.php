<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('globals',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('gl_name',63);
			$table->integer('gl_index');
			$table->string('gl_value',255);
			$table->primary(['gl_name', 'gl_index']);
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('globals');
    }
}
