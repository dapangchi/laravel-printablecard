<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_prices', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('card_id')->unsigned();
			$table->integer('quantity_id')->unsigned();
			$table->integer('feature_id')->unsigned();
			$table->integer('option_id')->unsigned();
			$table->float('price', 10)->unsigned()->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('card_prices');
	}

}
