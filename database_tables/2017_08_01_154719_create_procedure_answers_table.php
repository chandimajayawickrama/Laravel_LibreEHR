<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_answers', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigInteger('procedure_order_id')->default(0);
			$table->integer('procedure_order_seq')->default(0);
			$table->string('question_code',31);
			$table->increment('answer_seq');
			$table->string('answer',255);
			$table->primary(['answer_seq','procedure_order_id', 'procedure_order_seq', 'question_code']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_answers');
    }
}
