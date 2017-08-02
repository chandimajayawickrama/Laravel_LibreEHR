<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesToDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_to_documents',function(Blueprint $table){
			$table->engine = 'InnoDB';
			$table->integer('category_id')->default(0);
			$table->integer('document_id')->default(0);
			$table->primary(array(`category_id`,`document_id`));
			
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories_to_documents');
    }
}
