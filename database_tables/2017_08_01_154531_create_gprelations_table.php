<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGprelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gprelations', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->integer('type1');
			$table->bigInteger('id1');
			$table->integer('type2');
			$table->bigInteger('id2');
			$table->primary([type1,id1,type2,id2]);
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gprelations');
    }
}
