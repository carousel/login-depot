<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("brokers",function($table){
            $table->increments('id');
            $table->string('company_name');
            $table->integer('dot_number');
            $table->integer('mc_number');
            $table->string('customer_id');
            $table->string('worker_id');
            $table->string('logo');
            $table->string('website');
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
        Schema::drop("brokers");
	}

}
