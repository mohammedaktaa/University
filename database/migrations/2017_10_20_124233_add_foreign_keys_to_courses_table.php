<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->foreign('category_id', 'category_course')->references('category_id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('semester_id', 'courses_ibfk_1')->references('semester_id')->on('semesters')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('study_year_id', 'courses_ibfk_2')->references('study_year_id')->on('study_years')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->dropForeign('category_course');
			$table->dropForeign('courses_ibfk_1');
			$table->dropForeign('courses_ibfk_2');
		});
	}

}
