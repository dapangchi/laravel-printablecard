<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartItemOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_item_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cart_id')->unsigned();
			$table->integer('item_id')->unsigned();
			$table->integer('feature_id');
			$table->string('feature_name', 128);
			$table->string('feature_type', 20);
			$table->boolean('feature_sort')->default(0);
			$table->boolean('side_type');
			$table->integer('option_id')->default(0);
			$table->text('option_name');
			$table->boolean('option_sort')->default(0);
			$table->float('option_price', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cart_item_options');
	}

}
