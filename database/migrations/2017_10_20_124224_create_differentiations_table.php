<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDifferentiationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('differentiations', function(Blueprint $table)
		{
			$table->integer('differentiation_id', true);
			$table->string('name_en')->nullable();
			$table->string('name_ar')->nullable();
			$table->string('year')->nullable();
			$table->timestamps();
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
		Schema::drop('differentiations');
	}

}
