<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLbfDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lbf_data', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('form_id');
			$table->string('field_id',31);
			$table->text('field_value');
			$table->primary(['form_id','field_id']);
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lbf_data');
    }
}
