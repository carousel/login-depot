<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("transports",function($table){

            $table->increments('id');

            //pickup info
            $table->date("pickup_date");
            $table->string("pickup_state");
            $table->string("pickup_city");
            $table->string("pickup_zipcode");
            $table->string("pickup_street");
            $table->string("pickup_street_no");

            //dropoff info
            $table->date("dropoff_date");
            $table->string("dropoff_state");
            $table->string("dropoff_city");
            $table->string("dropoff_zipcode");
            $table->string("dropoff_street");
            $table->string("dropoff_street_no");

            //vehicle info
            $table->string("vehicle_year");
            $table->string("vehicle_make");
            $table->string("vehicle_model");
            $table->string("vehicle_type");
            $table->string("vehicle_condition");
            $table->text("vehicle_notes");

            //carrier  info
            $table->string("carrier_type");

            //status
            $table->string("status");

            //price
            $table->integer("quote_price");
            $table->integer("post_price");

            //notes
            $table->text("office_notes");
            $table->text("customer_notes");
            //relations
            $table->integer('customer_id');
            $table->date("modified_at");        
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
        Schema::drop("transports");
	}

}
