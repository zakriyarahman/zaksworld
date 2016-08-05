<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserversesTable extends Migration {

	public function up()
	{
		Schema::create('userverses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname');
			$table->string('middlename')->nullable();
			$table->string('lastname');
			$table->string('suffix')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('userverses');
	}
}