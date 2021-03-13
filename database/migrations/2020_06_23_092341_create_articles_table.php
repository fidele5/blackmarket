<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45)->nullable();
			$table->string('etat', 45)->nullable();
			$table->string('photo', 45)->nullable();
			$table->decimal('prix', 10)->nullable();
			$table->integer('duree')->nullable();
			$table->integer('type_id')->index('fk_articles_types_idx');
			$table->integer('user_id')->index('fk_articles_comptes1_idx');
			$table->integer('priorite_id')->nullable();
			$table->string('description', 205)->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->integer('commune_id')->index('fk_articles_communes1_idx');
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
		Schema::drop('articles');
	}

}
