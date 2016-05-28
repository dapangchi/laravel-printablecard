<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_features', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('card_id')->unsigned();
			$table->string('name', 128);
			$table->string('type', 10)->nullable()->default('dropdown');
			$table->string('link')->nullable();
			$table->boolean('sort')->unsigned()->default(0);
			$table->boolean('is_print')->unsigned()->default(1);
			$table->boolean('both_side')->unsigned()->default(1);
			$table->boolean('is_required')->unsigned()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('card_features');
	}

}
