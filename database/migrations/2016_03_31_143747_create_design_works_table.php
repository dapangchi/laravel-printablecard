<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesignWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('design_works', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('design_id')->unsigned();
			$table->string('image', 512);
			$table->string('label')->nullable();
			$table->string('link')->nullable();
			$table->boolean('sort')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('design_works');
	}

}
