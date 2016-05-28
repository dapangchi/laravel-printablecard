<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartItemDesignInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_item_design_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cart_id')->unsigned();
			$table->integer('item_id')->unsigned();
			$table->boolean('logo_require')->default(0);
			$table->string('logo_email', 128)->nullable();
			$table->string('logo_business', 128)->nullable();
			$table->string('logo_industry', 128)->nullable();
			$table->text('logo_audience', 65535)->nullable();
			$table->text('logo_samples', 65535)->nullable();
			$table->string('card_email', 128);
			$table->string('card_business', 128);
			$table->text('card_information', 65535);
			$table->integer('card_type_id')->default(0);
			$table->string('card_type_name', 128);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cart_item_design_info');
	}

}
