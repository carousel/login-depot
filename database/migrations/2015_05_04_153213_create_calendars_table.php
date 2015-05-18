<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->integer('worker_id');
			$table->string('event_title');
			$table->string('event_description');
			$table->string('event_color');
			$table->string('event_start_date');
			$table->string('event_end_date');
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
        Schema::drop("calendars");
	}

}
