<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_questions', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('lab_id')->default(0);
			$table->string('procedure_code',31);
			$table->string('question_code',31);
			$table->integer('seq')->default(0);
			$table->string('question_text',255);
			$table->boolean('required')->default(0);
			$table->integer('maxsize')->default(0);
			$table->char('fldtype',1);
			$table->text('options');
			$table->string('tips',255);
			$table->boolean('activity')->default(1);
			$table->primary(['lab_id', 'procedure_code', 'question_code']);

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_questions');
    }
}
