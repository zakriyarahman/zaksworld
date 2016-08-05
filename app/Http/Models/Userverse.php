<?php

namespace App\Http\Modals;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userverse extends Model {

	protected $table = 'userverses';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('firstname', 'middlename', 'lastname', 'suffix');

}