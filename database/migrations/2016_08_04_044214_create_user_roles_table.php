<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesTable extends Migration {

	public function up()
	{
		Schema::create('user_roles', function(Blueprint $table) {
			$table->increments('id');

            $table->string('name');
			$table->string('description')->nullable();

            $table->integer('creator')->index();
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('user_roles');
	}
}