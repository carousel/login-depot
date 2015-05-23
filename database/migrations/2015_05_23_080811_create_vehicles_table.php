<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('make');
			$table->string('name');
			$table->string('trim');
			$table->integer('year');
			$table->string('body');
			$table->string('engine_position');
			$table->integer('engine_cc');
			$table->integer('engine_cyl');
			$table->string('engine_type');
			$table->integer('engine_valves_per_cyl');
			$table->integer('engine_power_ps');
			$table->integer('engine_power_rpm');
			$table->integer('engine_torque_nm');
			$table->integer('engine_torque_rpm');
			$table->decimal('engine_bore_mm');
			$table->decimal('engine_stroke_mm');
			$table->string('engine_compression');
			$table->string('engine_fuel');
			$table->integer('top_speed_kph');
			$table->decimal('0_to_100_kph');
			$table->string('drive');
			$table->string('transmission_type');
			$table->integer('seats');
			$table->integer('doors');
			$table->integer('weight_kg');
			$table->integer('length_mm');
			$table->integer('width_mm');
			$table->integer('height_mm');
			$table->integer('wheelbase_mm');
			$table->decimal('lkm_hwy');
			$table->decimal('lkm_mixed');
			$table->decimal('lkm_city');
			$table->integer('fuel_cap_l');
			$table->boolean('sold_in_us');
			$table->integer('co2');
			$table->string('make_display');
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
		//
        Schema::drop("vehicles");
	}

}
