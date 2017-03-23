<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    /**
     * table
     */
    protected $table = 'job_positions';

    /**
     * fillable fields
     */
    protected $fillable = ['name'];
}
