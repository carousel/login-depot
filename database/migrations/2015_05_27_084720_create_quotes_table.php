<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("quotes",function($table){

            $table->increments('id');
            $table->string('quote_id');

            //pickup info
            $table->string("pickup_city");
            $table->string("pickup_state");
            $table->string("pickup_zipcode");

            //delivery info
            $table->string("delivery_city");
            $table->string("delivery_state");
            $table->string("delivery_zipcode");

            //vehicle info
            $table->string("vehicle_one_year");
            $table->string("vehicle_one_make");
            $table->string("vehicle_one_model");
            $table->string("vehicle_one_type");
            $table->string("vehicle_one_condition");
            $table->integer("vehicle_one_quantity");

            $table->string("vehicle_two_year")->nullable();
            $table->string("vehicle_two_make")->nullable();
            $table->string("vehicle_two_model")->nullable();
            $table->string("vehicle_two_type")->nullable();
            $table->string("vehicle_two_condition");
            $table->integer("vehicle_two_quantity")->nullable();

            $table->string("vehicle_three_year")->nullable();
            $table->string("vehicle_three_make")->nullable();
            $table->string("vehicle_three_model")->nullable();
            $table->string("vehicle_three_type")->nullable();
            $table->string("vehicle_three_condition");
            $table->integer("vehicle_three_quantity")->nullable();

            $table->string("vehicle_four_year")->nullable();
            $table->string("vehicle_four_make")->nullable();
            $table->string("vehicle_four_model")->nullable();
            $table->string("vehicle_four_type")->nullable();
            $table->string("vehicle_four_condition");
            $table->integer("vehicle_four_quantity")->nullable();

            $table->string("vehicle_five_year")->nullable();
            $table->string("vehicle_five_make")->nullable();
            $table->string("vehicle_five_model")->nullable();
            $table->string("vehicle_five_type")->nullable();
            $table->string("vehicle_five_condition");
            $table->integer("vehicle_five_quantity")->nullable();

            $table->string("vehicle_six_year")->nullable();
            $table->string("vehicle_six_make")->nullable();
            $table->string("vehicle_six_model")->nullable();
            $table->string("vehicle_six_type")->nullable();
            $table->string("vehicle_six_condition");
            $table->integer("vehicle_six_quantity")->nullable();

            $table->string("vehicle_seven_year")->nullable();
            $table->string("vehicle_seven_make")->nullable();
            $table->string("vehicle_seven_model")->nullable();
            $table->string("vehicle_seven_type")->nullable();
            $table->string("vehicle_seven_condition");
            $table->integer("vehicle_seven_quantity")->nullable();

            $table->string("vehicle_eight_year")->nullable();
            $table->string("vehicle_eight_make")->nullable();
            $table->string("vehicle_eight_model")->nullable();
            $table->string("vehicle_eight_type")->nullable();
            $table->string("vehicle_eight_condition");
            $table->integer("vehicle_eight_quantity")->nullable();

            $table->string("vehicle_nine_year")->nullable();
            $table->string("vehicle_nine_make")->nullable();
            $table->string("vehicle_nine_model")->nullable();
            $table->string("vehicle_nine_type")->nullable();
            $table->string("vehicle_nine_condition");
            $table->integer("vehicle_nine_quantity")->nullable();

            $table->string("vehicle_ten_year")->nullable();
            $table->string("vehicle_ten_make")->nullable();
            $table->string("vehicle_ten_model")->nullable();
            $table->string("vehicle_ten_type")->nullable();
            $table->string("vehicle_ten_condition");
            $table->integer("vehicle_ten_quantity")->nullable();

            $table->string("carrier_type");

            //status
            $table->string("status");

            //price
            $table->integer("quote_price");
            $table->integer("post_price");

            //notes
            $table->text("office_notes");
            $table->text("customer_notes");
            $table->text("vehicle_notes");
            //relations
            $table->integer('customer_id');
            $table->integer('company_id');
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
        Schema::drop("quotes");
	}

}
