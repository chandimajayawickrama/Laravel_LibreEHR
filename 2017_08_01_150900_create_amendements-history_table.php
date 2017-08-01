<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmendementsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amedement_history',function(Blueprint $table){
			$table->engine = 'MyISM';
			$table->increment('amendment_id');
			$table->text('amendment_note');
			$table->string('amendment_status',50)->nullable();
			$table->integer('created_by');
			$table->timestamp('created_time');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amedement_history');
    }
}
