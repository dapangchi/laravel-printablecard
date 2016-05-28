<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->boolean('product_type');
			$table->integer('product_id')->unsigned();
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->text('image', 65535)->nullable();
			$table->text('turnaround_time', 65535)->nullable();
			$table->float('unit_price', 10)->default(0.00);
			$table->integer('qty')->default(0);
			$table->integer('sets')->default(1);
			$table->float('price', 10)->default(0.00);
			$table->float('discount_percent', 10)->default(0.00);
			$table->text('custom_sets', 65535)->nullable();
			$table->string('template_uid')->nullable();
			$table->text('template_front', 65535)->nullable();
			$table->text('template_back', 65535)->nullable();
			$table->integer('reference_order_id')->nullable()->default(0);
			$table->integer('job_number')->unsigned()->nullable();
			$table->integer('job_stuff_id')->unsigned()->nullable();
			$table->dateTime('job_assigned_time')->nullable();
			$table->integer('job_assigned_by')->unsigned()->nullable();
            $table->boolean('job_tracking_method');
            $table->string('job_tracking_number', 50);
			$table->boolean('job_status')->default(0);  
			$table->dateTime('job_updated');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_items');
	}

}
