<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStuffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stuffs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 128)->unique('customers_email_unique');
			$table->string('password', 60);
			$table->string('passsalt', 8);
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->dateTime('logdate')->nullable();
			$table->integer('lognum')->nullable()->default(0);
			$table->boolean('is_active')->default(0);
			$table->string('active_code', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stuffs');
	}

}
