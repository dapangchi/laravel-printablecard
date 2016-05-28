<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 128);
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->string('avatar', 512);
			$table->string('social_name', 32);
			$table->string('social_id', 50);
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
		Schema::drop('social_profiles');
	}

}
