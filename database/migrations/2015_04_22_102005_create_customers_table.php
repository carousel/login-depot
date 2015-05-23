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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('secondary_email')->nullable();
            $table->integer('phone')->nullable();
			$table->string('email')->unique();
            $table->string('company_id');
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
