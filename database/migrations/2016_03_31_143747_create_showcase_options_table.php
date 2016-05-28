<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShowcaseOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('showcase_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('showcase_id')->unsigned();
			$table->integer('card_feature_id')->unsigned();
			$table->integer('card_option_id')->unsigned();
			$table->boolean('side_type')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('showcase_options');
	}

}
