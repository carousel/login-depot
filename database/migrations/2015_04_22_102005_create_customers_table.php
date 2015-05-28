<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("customers",function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('secondary_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('secondary_email')->nullable();
            $table->string('company_id');
            $table->dateTime('pickup_date');
            $table->string("quote_id");
            $table->string("status");
            $table->dateTime("modified_at");
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
        Schema::drop("customers");
	}

}
