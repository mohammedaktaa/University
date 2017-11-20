<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDifferentiationFacultiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('differentiation_faculties', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('differentiation_id')->default(0);
			$table->integer('faculty_id')->default(0);
			$table->dateTime('created_At')->default('current_timestamp()');
			$table->dateTime('updated_at')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('differentiation_faculties');
	}

}
