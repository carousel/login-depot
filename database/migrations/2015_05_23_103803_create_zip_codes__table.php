<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zipcodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('zip');
			$table->string('type');
			$table->string('primary_city');
			$table->string('acceptable_cities',282);
			$table->string('unacceptable_cities',2208);
			$table->string('state');
			$table->string('county');
			$table->string('timezone');
			$table->string('area_codes');
            $table->decimal('latitude');
            $table->decimal('longitude');
			$table->string('world_region');
			$table->string('country');
            $table->tinyInteger('decommissioned');
			$table->integer('estimated_population');
            $table->text('notes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop("zipcodes");
	}

}
