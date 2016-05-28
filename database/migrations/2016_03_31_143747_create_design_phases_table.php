<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesignPhasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('design_phases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('design_id')->unsigned();
			$table->string('title', 128);
			$table->text('text', 65535);
			$table->boolean('icon_type')->default(0);
			$table->string('icon_path', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('design_phases');
	}

}
