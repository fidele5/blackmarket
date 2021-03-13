<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommunesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('communes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 65)->nullable();
			$table->boolean('etat')->nullable();
			$table->integer('villes_id')->index('fk_communes_villes1_idx');
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
		Schema::drop('communes');
	}

}
