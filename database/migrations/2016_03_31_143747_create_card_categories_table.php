<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('service_id');
			$table->string('name');
			$table->string('text', 128)->nullable();
			$table->string('slug')->nullable();
			$table->string('image', 512)->nullable();
			$table->text('meta_tag', 65535)->nullable();
			$table->text('meta_description', 65535)->nullable();
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
		Schema::drop('card_categories');
	}

}
