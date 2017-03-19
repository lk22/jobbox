<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;

use JobDesk\User;

class JobApplication extends Model
{
    /**
    * table
    */
    protected $table = 'job_applications';

    /**
    * fillable fields
    */
    protected $fillable = [
        'body', 'user_id'
    ];
}
