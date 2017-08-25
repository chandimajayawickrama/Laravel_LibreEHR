<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcdaTableMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccda_table_mapping',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->string('ccda_component',100);
			$table->string('ccda_component_section',100);
			$table->string('form_dir',100);
			$table->smallInteger('form_type');
			$table->string('form_table',100);
			$table->integer('user_id');
			$table->tinyInteger('deleted');
			$table->timestamp('timestamp');
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
        Schema::drop('ccda_table_mapping');
    }
}
