<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerShippingAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_shipping_addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->string('phone', 32)->nullable();
			$table->string('address', 128);
			$table->string('city', 50);
			$table->integer('country_id');
			$table->integer('state_id');
			$table->string('zipcode', 50);
			$table->string('company', 128)->nullable();
			$table->boolean('default')->default(0);
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
		Schema::drop('customer_shipping_addresses');
	}

}
