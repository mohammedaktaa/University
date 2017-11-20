<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_items', function(Blueprint $table)
		{
			$table->integer('menu_item_id', true);
			$table->string('name_en')->default('0');
			$table->string('name_ar')->default('0');
			$table->integer('parent_id')->nullable();
			$table->string('is_root', 50)->default('0');
			$table->timestamps();
			$table->softDeletes();
			$table->string('target')->nullable();
			$table->string('classes')->nullable();
			$table->integer('order')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu_items');
	}

}
