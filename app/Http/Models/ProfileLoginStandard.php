<?php

namespace App\Http\Modals;

use Illuminate\Database\Eloquent\Model;

class ProfileLoginStandard extends Model {

	protected $table = 'profile_login_standards';
	public $timestamps = true;
	protected $hidden = array('password', 'reset_key');

}