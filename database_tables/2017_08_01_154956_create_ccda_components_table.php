<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcdaComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccda_components',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('ccda_components_id');
			$table->string('ccda_components_field',100);
			$table->string('ccda_components_name',100);
			$table->integer('ccda_type');
			$table->primary('ccda_components_id');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ccda_components');
    }
}
