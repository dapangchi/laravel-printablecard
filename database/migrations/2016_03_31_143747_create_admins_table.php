<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 128)->unique('users_email_unique');
			$table->string('password', 60);
			$table->string('passsalt', 8);
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->dateTime('logdate');
			$table->integer('lognum');
			$table->boolean('is_active');
			$table->string('active_code', 100)->nullable();
            $table->boolean('user_type');
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
		Schema::drop('admins');
	}

}
