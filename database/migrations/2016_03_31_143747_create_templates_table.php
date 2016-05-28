<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('templates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('service_id');
			$table->integer('card_id')->unsigned();
			$table->string('template_uid', 128);
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->text('turnaround_time', 65535)->nullable();
			$table->string('meta_tag', 512)->nullable();
			$table->string('meta_description', 512)->nullable();
			$table->date('promotion_start_date')->nullable();
			$table->date('promotion_end_date')->nullable();
			$table->float('promotion_percent', 10, 1)->nullable()->default(0.0);
			$table->string('slug');
			$table->boolean('status')->default(1);
			$table->integer('purchased')->default(0);
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
		Schema::drop('templates');
	}

}
