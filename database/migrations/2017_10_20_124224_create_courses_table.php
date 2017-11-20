<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->integer('course_id', true);
			$table->integer('category_id')->index('category_id');
			$table->string('name_en', 200);
			$table->string('name_ar', 200);
			$table->string('code', 4);
			$table->integer('semester_id')->nullable()->index('semester_id');
			$table->string('year', 5);
			$table->integer('study_year_id')->nullable()->index('study_year_id');
			$table->timestamps();
			$table->dateTime('deleted_At')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
