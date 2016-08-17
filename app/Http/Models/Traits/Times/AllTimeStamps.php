<?php

namespace App\Http\Modals\Traits\Times;

trait AllTimeStamps
{


    /**
     * Model uses timestamps
     *
     * @var bool
     */
    public $timestamps = true;


    /**
     * All TimeStamps for the table
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


}