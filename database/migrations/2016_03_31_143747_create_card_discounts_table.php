<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_discounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('card_id')->unsigned();
			$table->integer('sets')->unsigned();
			$table->float('percent', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('card_discounts');
	}

}
