<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmendementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amendements', function (Blueprint $table) {
			$table->engine = 'MyISAM';
			$table->increments('Amendement_ID');
            $table->date('amendment_date');
            $table->string('amendment_by',50);
            $table->string('amendment_status',50);
			$table->integer('pid');
			$table->text('amendment_desc');
			$table->integer('created_by');
			$table->integer('modified_by');
			$table->integer('foreign_id')->nullable();
			$table->timestamp('created_time');
			$table->timestamp('modified_time')->nullable();
			$table->integer('amendments_pid');
			$table->primary('amendments_id');
			$table->index('amendment_pid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('amendements');
    }
}
