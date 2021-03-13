<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVillesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('villes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 65);
			$table->string('province', 65)->nullable();
			$table->boolean('etat')->nullable();
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
		Schema::drop('villes');
	}

}
