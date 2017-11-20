<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('password')->nullable();
			$table->integer('university_id')->nullable()->unique('university_id');
			$table->integer('user_type_id')->default(1)->index('user_type_id');
			$table->integer('study_year_id')->nullable()->index('FK_users_study_years');
			$table->integer('faculty_id')->nullable()->index('faculty_id');
			$table->string('phone', 20);
			$table->string('mobile', 30);
			$table->string('address', 300);
			$table->string('national_number', 25);
			$table->float('total_baccalaureate', 10, 0);
			$table->string('father_name', 200);
			$table->string('mother_name', 200);
			$table->date('birth_date');
			$table->integer('gender_id')->index('gender_id');
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('pdf')->nullable();
			$table->date('register_date')->nullable();
			$table->string('image')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
