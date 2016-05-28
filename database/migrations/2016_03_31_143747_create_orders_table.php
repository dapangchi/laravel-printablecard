<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('number')->unsigned();
			$table->integer('customer_id')->unsigned()->nullable()->default(0);
			$table->string('customer_name', 128)->nullable();
			$table->string('customer_email', 128)->nullable();
			$table->string('billing_name', 128);
			$table->string('billing_email', 128);
			$table->string('billing_phone', 50);
			$table->string('billing_address', 128);
			$table->string('billing_city', 50);
			$table->string('billing_country', 50);
			$table->string('billing_state', 50);
			$table->string('billing_zipcode', 50);
			$table->string('shipping_name', 128);
			$table->string('shipping_email', 128);
			$table->string('shipping_phone', 50);
			$table->string('shipping_address', 128);
			$table->string('shipping_city', 50);
			$table->binary('shipping_country', 50);
			$table->string('shipping_state', 50);
			$table->string('shipping_zipcode', 50);
			$table->float('sub_total_price', 10)->default(0.00);
			$table->string('shipping_method', 50);
			$table->float('shipping_price', 10)->default(0.00);
			$table->text('shipping_note', 65535)->nullable();
			$table->string('currency', 3)->default('USD');
			$table->float('currency_rate', 10, 3)->default(1.000);
			$table->float('tax_price', 10)->default(0.00);
			$table->float('discount_price', 10)->default(0.00);
			$table->float('total_price', 10)->default(0.00);
			$table->string('payment_method', 50);
			$table->string('transaction_id', 128)->nullable();
			$table->string('payer_id', 128)->nullable();
			$table->boolean('status')->default(-1);
			$table->string('created_by', 50)->nullable();
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
		Schema::drop('orders');
	}

}
