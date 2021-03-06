<?php

namespace JobDesk;

use JobDesk\Traits\ErrorHandable;
use JobDesk\Traits\Crudable;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use JobDesk\Post;

class User extends Authenticatable
{
    use Notifiable, Crudable, ErrorHandable, Sluggable, SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'slug', 'email', 'password', 'avatar', 'dream_job_title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
                'source' => 'name'
            ]
        ];
    }

    /**
    * user has many posts
    */
    public function post() {
        return $this->hasMany(Post::class);
    }

    /**
    * user has many job applications
    */
    public function jobApplications() {
        return $this->hasMany(JobApplication::class);
    }

    /**
     * find user by id
     */
    public function findBySlug($slug) {
        return $this->whereSlug($slug)->get();
    }

    /**
     * find authenticated user
     */
    public function isAuthenticated() {
        return auth()->user();
    }

    /**
     * define orderby ascending scope
     */
    public function scopeOrderByAscending($query) {
        return $query->orderBy('id', 'ASC');
    }

    /**
     * define orderby descending scope
     */
    public function scopeOrderByDescending($query) {
        return $query->orderBy('id', 'DESC');
    }

    /**
     * define specific ordering
     */
    public function orderingBy($order) {
        if($order === 'ASC') return $this->orderByAscending()->get();
        if($order === 'DESC') return $this->orderByDescending()->get();

        return $this;
    }

    /**
     * create user with information
     */
    public function createUserWith(array $data) {
        return $this->createWith($this, $data);
    }

    /**
     * update user with data
     */
    public function updateUserWith(array $data) {
        return $this->updateWith($this, $data);
    }

    /**
     * delete user
     */
    public function deleteUserWithId($id) {
       return $this->deleteWhere($this, $id);
    }
}
