<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlideImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slide_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('slide_id');
			$table->string('image');
			$table->string('label')->nullable();
			$table->boolean('main')->default(0);
			$table->smallInteger('sort')->default(1);
			$table->boolean('exclude')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slide_images');
	}

}
