<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommunesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('communes', function(Blueprint $table)
		{
			$table->foreign('villes_id', 'fk_communes_villes1')->references('id')->on('villes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('communes', function(Blueprint $table)
		{
			$table->dropForeign('fk_communes_villes1');
		});
	}

}
