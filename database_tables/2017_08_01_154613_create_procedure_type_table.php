<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedure_type', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->bigIncrements('procedure_type_id');
			$table->bigInteger('parent')->default(0);
			$table->string('name',63);
			$table->bigInteger('lab_id')->default(0);
			$table->string('procedure_code',31);
			$table->string('procedure_type',31);
			$table->string('body_site',31);
			$table->string('specimen',31);
			$table->string('route_admin',31);
			$table->string('laterality',31);
			$table->string('description',255);
			$table->string('standard_code',255);
			$table->string('related_code',255);
			$table->string('units',31);
			$table->string('range',255);
			$table->integer('seq')->default(0);
			$table->boolean('activity')->default(1);
			$table->string('notes',255);
			$table->primary('procedure_type_id');
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('procedure_type');
    }
}
