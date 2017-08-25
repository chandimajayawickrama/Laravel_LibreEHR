<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcdaFieldMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccda_field_mapping',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->integer('table_id');
			$table->string('ccda_field',100);
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
        Schema::drop('ccda_field_mapping');
    }
}
