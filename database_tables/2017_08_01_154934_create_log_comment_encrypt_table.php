<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogCommentEncryptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_comment_encrypt',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->integer('log_id');
			$table->enum('encrypt',['Yes','No'])->default('No');
			$table->longText('checksum');
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
        Schema::drop('log_comment_encrypt');
    }
}
