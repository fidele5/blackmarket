<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45);
			$table->string('prenom', 45)->nullable();
			$table->string('username')->unique('username_UNIQUE');
			$table->string('telephone1', 45);
			$table->string('telephone2', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('password');
			$table->string('photo', 45)->nullable();
			$table->boolean('etat')->nullable()->default(1);
			$table->string('type', 45)->nullable();
			$table->boolean('is_admin')->default(false);
			$table->boolean('remember_token')->nullable();
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
		Schema::drop('users');
	}

}
