<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('study_year_id', 'FK_users_study_years')->references('study_year_id')->on('study_years')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_type_id', 'user_types')->references('user_type_id')->on('user_types')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('faculty_id', 'users_ibfk_1')->references('faculty_id')->on('faculties')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('gender_id', 'users_ibfk_2')->references('gender_id')->on('genders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('FK_users_study_years');
			$table->dropForeign('user_types');
			$table->dropForeign('users_ibfk_1');
			$table->dropForeign('users_ibfk_2');
		});
	}

}
