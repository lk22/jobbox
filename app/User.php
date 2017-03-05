<?php

namespace JobBox;

use JobBox\Traits\ErrorHandable;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ErrorHandable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'email', 'password', 'avatar', 'dream_job_title',
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
     * find user by id
     */
    public function findById($id) {
        return $this->whereId($id)->get();
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
        return $query->orderBy('ASC')->by('id');
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
        return (isset($data) && is_array($data)) ? $this->create($data) : $this->handleError('Data not provided to create');
    }

    /**
     * update user with data
     */
    public function updateUserWith(array $data) {
        return (isset($data) && is_array($data)) ? $this->update($data) : $this->handleError('Data not provided to update');
    }

    /**
     * delete user
     */
    public function deleteUserWithId($id) {
        $user = $this->findById($id)->firstOrFail();

        return (isset($id) && count($user) === 1) ? $user->delete() : $this->handleError('User was not found, could not delete resource');
    }

    /**
     * define field to order by
     */
    public function by($field = null) {
        if (!isset($field)) {
            $field = 'id';
            return $field;
        } 
    }
}
