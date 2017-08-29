<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_warehouse', function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->integer('pw_drug_id');
			$table->string('pw_warehouse',31);
			$table->float('pw_min_level')->default(0);
			$table->float('pw_max_level')->default(0);
			$table->primary(['pw_drug_id','pw_warehouse']);
			
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_warehouse');
    }
}
