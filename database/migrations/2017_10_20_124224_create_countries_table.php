<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('country_id', true);
			$table->char('code_2', 2)->nullable();
			$table->char('code_3', 3)->nullable();
			$table->string('name_en', 100)->nullable();
			$table->string('name_ar', 200)->nullable();
			$table->string('nationality_en', 50)->nullable();
			$table->string('nationality_ar', 50)->nullable();
			$table->char('active', 1)->default('A');
			$table->char('supported', 1)->nullable()->default('N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
