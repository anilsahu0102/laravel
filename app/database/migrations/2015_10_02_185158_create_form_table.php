<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('form', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('product_name', 255);
            $table->integer('stock', 11);
            $table->float('price');

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
		Schema::table('form', function(Blueprint $table)
		{
			//
		});
	}

}
