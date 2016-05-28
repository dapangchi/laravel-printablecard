<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('designs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('slide_id');
			$table->string('name');
			$table->string('image', 512)->nullable();
			$table->string('text', 512)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('meta_tag', 512)->nullable();
			$table->string('meta_description', 512)->nullable();
			$table->string('slug');
			$table->boolean('status')->default(1);
			$table->boolean('require_logo_design')->default(1);
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
		Schema::drop('designs');
	}

}
