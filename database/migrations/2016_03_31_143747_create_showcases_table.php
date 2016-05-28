<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShowcasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('showcases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('card_id')->unsigned();
			$table->boolean('showcase_type');
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->string('meta_tag', 512)->nullable();
			$table->string('meta_description', 512)->nullable();
			$table->string('slug');
			$table->boolean('status')->default(1);
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
		Schema::drop('showcases');
	}

}
