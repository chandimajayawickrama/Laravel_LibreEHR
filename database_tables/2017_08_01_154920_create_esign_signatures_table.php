<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsignSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esign_signatures',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->integer('tid');
			$table->string('table',255);
			$table->integer('uid');
			$table->dateTime('datetime');
			$table->boolean('is_lock')->default(0);
			$table->text('amendment');
			$table->string('hash',255);
			$table->string('signature_hash',255);
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
        Schema::drop('esign_signatures');
    }
}
