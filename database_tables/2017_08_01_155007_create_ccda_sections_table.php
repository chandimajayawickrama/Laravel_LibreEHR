<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcdaSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccda_sections',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('ccda_sections_id');
			$table->integer('ccda_components_id');
			$table->string('ccda_sections_field',100);
			$table->string('ccda_sections_name',100);
			$table->tinyInteger('ccda_sections_req_mapping');
			$table->primary('ccda_sections_id');
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ccda_sections');
    }
}
