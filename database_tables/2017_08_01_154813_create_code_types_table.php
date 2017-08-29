<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_types', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->string('ct_key',15);
			$table->integer('ct_id');
			$table->integer('ct_seq');
			$table->integer('ct_mod');
			$table->string('ct_just',15);
			$table->string('ct_mask',15);
			$table->boolean('ct_fee');
			$table->boolean('ct_rel');
			$table->boolean('ct_nofs');
			$table->boolean('ct_diag');
			$table->boolean('ct_active');
			$table->string('ct_label',31);
			$table->boolean('ct_external');
			$table->boolean('ct_claim');
			$table->boolean('ct_proc');
			$table->boolean('ct_term');
			$table->boolean('ct_problem');
			$table->boolean('ct_drug');
			$table->primary('ct_key');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('code_types');
    }
}
