<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacultyUniversitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('faculty_universities', function(Blueprint $table)
		{
			$table->foreign('faculty_id', 'faculty_universities_ibfk_1')->references('faculty_id')->on('faculties')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('university_id', 'faculty_universities_ibfk_2')->references('university_id')->on('universities')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('faculty_universities', function(Blueprint $table)
		{
			$table->dropForeign('faculty_universities_ibfk_1');
			$table->dropForeign('faculty_universities_ibfk_2');
		});
	}

}
