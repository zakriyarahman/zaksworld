<?php

namespace App\Http\Modals;

# Framework Library
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

# Application Library
use App\Http\Modals\Traits\Times\UnixTimeTraits;
use App\Http\Modals\Traits\Times\AllTimeStamps;


class Userverse extends Model {


    /**
     * Models uses soft deletes, timestamps and unix times
     */
    use SoftDeletes, AllTimeStamps, UnixTimeTraits;


    /**
     * Model uses profiles table
     *
     * @var string
     */
	protected $table = 'userverses';


    /**
     * Mass Assignment Rules
     *
     * @var array
     */
	protected $fillable = array(
	    'firstname',
        'middlename',
        'lastname',
        'suffix');

}