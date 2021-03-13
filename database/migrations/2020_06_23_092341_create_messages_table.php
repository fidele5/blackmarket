<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nom', 65)->nullable();
			$table->string('phone', 65)->nullable();
			$table->string('email', 65)->nullable();
			$table->string('message')->nullable();
			$table->boolean('lu')->nullable()->default(0);
			$table->boolean('important')->nullable();
			$table->integer('user_id')->nullable()->index('fk_messages_users1_idx');
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
		Schema::drop('messages');
	}

}
