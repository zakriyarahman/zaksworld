<?php

namespace App\Http\Modals;

# Framework Library
use Illuminate\Database\Eloquent\Model;

# Application Library
use App\Http\Modals\Traits\Times\UnixTimeTraits;
use App\Http\Modals\Traits\Times\AllTimeStamps;


class ProfileLoginStandard extends Model {

    /**
     * Models uses soft deletes, timestamps and unix times
     */
    use SoftDeletes, AllTimeStamps, UnixTimeTraits;


    /**
     * Model uses profiles table
     *
     * @var string
     */
    protected $table = 'profile_login_standards';


    /**
     * Model has hidden attributes
     *
     * @var array
     */
	protected $hidden = array(
	    'password',
        'reset_key');

}