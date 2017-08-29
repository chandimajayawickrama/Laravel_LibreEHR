<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharedAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shared_attributes', function(Blueprint $table){
			$table->bigInteger('pid');
			$table->bigInteger('encounter');
			$table->string('field_id',31);
			$table->dateTime('last_update');
			$table->bigInteger('user_id');
			$table->text('field_value');
			$table->primary(['pid', 'encounter', 'field_id']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shared_attributes');
    }
}
