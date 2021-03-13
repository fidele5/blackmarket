<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			$table->foreign('commune_id', 'fk_articles_communes1')->references('id')->on('communes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_articles_comptes1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_articles_types')->references('id')->on('types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			$table->dropForeign('fk_articles_communes1');
			$table->dropForeign('fk_articles_comptes1');
			$table->dropForeign('fk_articles_types');
		});
	}

}
