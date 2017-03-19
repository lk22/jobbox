<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use JobDesk\User;

class Post extends Model
{
	/**
	 * traits
	 */
	use SoftDeletes;

    /**
     * table name
     */
    protected $table = 'posts';

    /**
     * fillable fields
     */
    protected $fillable = ['title', 'body', 'user_id', 'post_cover'];

    /**
     * dates
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * post belongs to user
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo::class
     */
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
