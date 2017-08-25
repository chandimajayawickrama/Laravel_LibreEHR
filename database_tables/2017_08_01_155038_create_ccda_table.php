<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcdaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccda',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->increment('id');
			$table->bigInteger('pid');
			$table->bigInteger('encounter');
			$table->mediumText('ccda_data');
			$table->string('time',50);
			$table->smallInteger('status');
			$table->timestamp('updated_date');
			$table->string('user_id',50);
			$table->string('couch_docid',100);
			$table->string('couch_revid',100);
			$table->tinyInteger('view');
			$table->tinyInteger('emr_transfer');
			$table->primary('id');
			$table->unique(['pid','encounter','time']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ccda');
    }
}
