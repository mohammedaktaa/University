<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCourseUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_users', function(Blueprint $table)
		{
			$table->foreign('user_id', 'course_users_ibfk_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course_id', 'course_users_ibfk_2')->references('course_id')->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_users', function(Blueprint $table)
		{
			$table->dropForeign('course_users_ibfk_1');
			$table->dropForeign('course_users_ibfk_2');
		});
	}

}
