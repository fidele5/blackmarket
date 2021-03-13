<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('libelle', 45);
			$table->float('pourcentage', 10, 0)->nullable();
			$table->integer('priorite')->nullable();
			$table->date('updated_at')->nullable();
			$table->date('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('types');
	}

}
