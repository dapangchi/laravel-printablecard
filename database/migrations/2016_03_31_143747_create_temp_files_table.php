<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temp_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('key', 20);
			$table->string('name');
			$table->string('path', 512);
			$table->float('size', 10)->default(0.00);
			$table->boolean('target')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('temp_files');
	}

}
