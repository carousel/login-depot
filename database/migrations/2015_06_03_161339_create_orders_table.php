<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('quote_id');
			$table->string('pickup_contact_name');
			$table->string('pickup_contact_phone');
			$table->string('pickup_contact_secondary_phone');
			$table->string('pickup_address');
			$table->string('pickup_city');
			$table->string('pickup_state');
			$table->string('pickup_zipcode');
			$table->string('pickup_address_type');
			$table->string('dropoff_contact_name');
			$table->string('dropoff_contact_phone');
			$table->string('dropoff_contact_secondary_phone');
			$table->string('dropoff_address');
			$table->string('dropoff_city');
			$table->string('dropoff_state');
			$table->string('dropoff_zipcode');
			$table->string('dropoff_address_type');
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
		Schema::drop('orders');
	}

}
