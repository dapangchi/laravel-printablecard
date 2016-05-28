<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('service_id');
			$table->integer('category_id');
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->text('turnaround_time', 65535)->nullable();
			$table->string('guide_link')->nullable();
			$table->string('meta_tag', 512)->nullable();
			$table->string('meta_description', 512)->nullable();
			$table->float('weight', 10, 3)->nullable()->default(0.000);
			$table->date('promotion_start_date')->nullable();
			$table->date('promotion_end_date')->nullable();
			$table->float('promotion_percent', 10, 1)->nullable();
			$table->string('slug')->nullable();
			$table->boolean('pricing')->default(0);
			$table->boolean('atleast_one')->default(1);
			$table->boolean('status')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
