<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tax_zones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->unsigned()->index('FK_tax_zones_country_id');
			$table->integer('region_id')->unsigned()->index('FK_tax_zones_region_id');
			$table->float('tax', 10, 3)->default(0.000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tax_zones');
	}

}
