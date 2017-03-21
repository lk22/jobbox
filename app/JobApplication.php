<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use JobDesk\User;

class JobApplication extends Model
{

    /**
    * traits
    */
    use SoftDeletes, Sluggable, SluggableScopeHelpers;

    /**
    * table
    */
    protected $table = 'job_applications';

    /**
    * fillable fields
    */
    protected $fillable = [
        'title', 'body', 'slug', 'user_id'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
    * job applications belongs to user
    */
    public function user() {
      return $this->belongsTo(User::class);
    }
}
