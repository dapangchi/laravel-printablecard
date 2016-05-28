<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartItemFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_item_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cart_id')->unsigned();
			$table->integer('item_id')->unsigned();
			$table->string('name', 128);
			$table->string('path', 512);
			$table->float('size', 10);
			$table->boolean('target')->default(0);
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
		Schema::drop('cart_item_files');
	}

}
