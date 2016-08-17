<?php

namespace App\Http\Modals;

# Framework Library
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

# Application Library
use App\Http\Modals\Traits\Times\UnixTimeTraits;
use App\Http\Modals\Traits\Times\AllTimeStamps;

class Profile extends Model
{

    /**
     * Models uses soft deletes, timestamps and unix times
     */
    use SoftDeletes, AllTimeStamps, UnixTimeTraits;


    /**
     * Model has profiles table
     *
     * @var string
     */
	protected $table = 'profiles';


    /**
     * Mass Assignment Rules
     *
     * @var array
     */
	protected $fillable = array('status');

}