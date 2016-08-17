<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileLoginStandardsTable extends Migration {

	public function up()
	{
		Schema::create('profile_login_standards', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id')->unsigned();

			$table->string('username');
			$table->string('password');
			$table->string('reset_key');
			$table->boolean('force_password_change');

            $table->integer('creator')->index();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('profile_login_standards');
	}
}