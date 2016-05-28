<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerPasswordResetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_password_resets', function(Blueprint $table)
		{
			$table->string('email')->index('password_resets_email_index');
			$table->string('token')->index('password_resets_token_index');
			$table->integer('expire');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_password_resets');
	}

}
