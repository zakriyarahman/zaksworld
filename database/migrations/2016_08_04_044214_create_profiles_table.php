<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');

			$table->integer('userverse_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->boolean('status')->default(true);

            $table->integer('creator')->index();
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}