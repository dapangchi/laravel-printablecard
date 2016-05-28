<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cart_id')->unsigned();
			$table->boolean('product_type');
			$table->integer('product_id');
			$table->string('product_name');
			$table->text('product_description', 65535)->nullable();
			$table->text('product_image', 65535)->nullable();
			$table->integer('product_quantity');
			$table->text('product_turnaround_time', 65535)->nullable();
			$table->integer('sets')->default(1);
			$table->float('unit_price', 10);
			$table->float('item_price', 10);
			$table->float('discount_percent', 10)->default(0.00);
			$table->float('weight', 10)->nullable()->default(0.00);
			$table->boolean('set_type')->nullable()->default(0);
			$table->text('set_params', 65535)->nullable();
			$table->text('custom_sets', 65535)->nullable();
			$table->string('template_uid')->nullable();
			$table->text('template_back', 65535)->nullable();
			$table->text('template_front', 65535)->nullable();
			$table->integer('reference_order_id')->default(0);
			$table->primary(['id','cart_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cart_items');
	}

}
