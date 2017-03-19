<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    /**
    * job applications belongs to user
    */
    public function user() {
      return $this->belongsTo(User::class);
    }
}
