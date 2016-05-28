<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coupons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 128);
			$table->string('code', 10);
			$table->integer('start_date');
			$table->integer('end_date');
			$table->float('discount_percent', 10)->default(0.00);
			$table->smallInteger('limit_time')->default(0);
			$table->smallInteger('used_time')->default(0);
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
		Schema::drop('coupons');
	}

}
