<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesignPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('design_packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('design_id')->unsigned();
			$table->string('name');
			$table->float('price', 10)->default(0.00);
			$table->text('description', 65535)->nullable();
			$table->string('image', 512)->nullable();
			$table->string('slug');
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
		Schema::drop('design_packages');
	}

}
