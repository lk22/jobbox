<?php

namespace JobDesk;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use JobDesk\Traits\Crudable;

class Message extends Model
{
    /**
     * used traits
     */
    use SoftDeletes, Crudable;

    /**
     * table
     */
    protected $table = 'contact_messages';

    /**
     * fillable fields
     */
    protected $fillable = ['name', 'email', 'message'];

    /**
     * create user with information
     */
    public function createMessageWith(array $data) {
        return $this->createWith($this, $data);
    }

    /**
     * update user with data
     */
    public function updateMessageWith(array $data) {
        return $this->updateWith($this, $data);
    }

    /**
     * delete user
     */
    public function deleteMessageWithId($id) {
       return $this->deleteWhere($this, $id);
    }
}
