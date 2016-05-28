<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('title');
			$table->string('slug')->nullable();
			$table->string('meta_tag', 512)->nullable();
			$table->string('meta_description', 512)->nullable();
			$table->string('short_text', 128)->nullable();
			$table->smallInteger('slide_id')->nullable();
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
		Schema::drop('services');
	}

}
