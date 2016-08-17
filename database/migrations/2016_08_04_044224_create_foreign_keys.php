<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{

		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('userverse_id')->references('id')->on('userverses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('user_roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('profile_login_standards', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_userverse_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_role_id_foreign');
		});
		Schema::table('profile_login_standards', function(Blueprint $table) {
			$table->dropForeign('profile_login_standards_profile_id_foreign');
		});
	}
}