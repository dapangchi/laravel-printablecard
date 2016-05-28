<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaxZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tax_zones', function(Blueprint $table)
		{
			$table->foreign('country_id', 'FK_tax_zones_country_id')->references('id')->on('countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('region_id', 'FK_tax_zones_region_id')->references('id')->on('regions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tax_zones', function(Blueprint $table)
		{
			$table->dropForeign('FK_tax_zones_country_id');
			$table->dropForeign('FK_tax_zones_region_id');
		});
	}

}
