<?php

namespace App\Http\Modals;

#Framwork Library
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

# Application Library
use App\Http\Modals\Traits\Times\UnixTimeTraits;
use App\Http\Modals\Traits\Times\AllTimeStamps;


class UserRole extends Model {


    /**
     * Models uses soft deletes, timestamps and unix times
     */
    use SoftDeletes, AllTimeStamps, UnixTimeTraits;


    /**
     * Model uses profiles table
     *
     * @var string
     */
	protected $table = 'user_roles';


    /**
     * Mass Assignment Rules
     *
     * @var array
     */
    protected $fillable = array(
        'name',
        'description');

}