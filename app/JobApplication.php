<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;

use JobDesk\User;

class JobApplication extends Model
{

    /**
    * traits
    */
    use SoftDeletes;

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
