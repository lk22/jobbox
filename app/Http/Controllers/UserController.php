<?php

namespace JobDesk\Http\Controllers;

use Storage;
use Repsonse;

use Illuminate\Http\Request;

use JobDesk\Http\Requests\CreateUserRequest;
use JobDesk\Http\Requests\UpdateUserRequest;
use JobDesk\Http\Requests\RemoveUserRequest;

use JobDesk\User;

class UserController extends Controller
{
	/**
	 * Constructor
	 * @param JobDesk\User
	 */
    public function __construct(User $user)
    {
    	$this->user = $user;
    }

    /**
     * get all resources
     * @return void
     */
    public function all() 
    {
    	$users = $this->user->all();

    	return $users;
    }

    /**
     * order by a specific order
     * @param  [type]
     * @return [type]
     */
    public function orderBy($order) {
    	$orderedUsers = $this->user->orderingBy($order);

    	return (count($orderedUsers)) ? $orderedUsers : response()->json(['error' => 'ressources not found']);
    }

    /**
     * @param  $id users id 
     * @return void
     */
    public function user($id) 
    {
    	$user = $this->findById($id);

    	return $user;
    }

    /**
     * get the response of the authenticated user to the api
     * @return  void
     */
    public function auth()
    {
    	$auth = $this->user->isAuthenticated();

    	return $auth;
    }

    /**
     * grab latest users
     * @return void
     */
    public function latest()
    {
    	$latestUsers = $this->user()->latest();

    	return $latestUsers;
    }

    /**
     * Creating a new user ressource
     * @param  CreateUserRequest
     * @return [type]
     */
    public function create(CreateUserRequest $request) 
    {
    	$data = $request->all();

    	if ( $data ) 
    	{

    		$firstname = $request->get('firstname');
    		$lastname = $request->get('lastname');
    		$middlename = $request->get('middlename');
    		$email = $request->get('email');
    		$password = $request->get('password');
    		$avatar = $request->file('avatar');

    		$this->user->createUserWith([
    			'firstname' => $firstname,
    			'middlename' => (isset($middlename)) ? $middlename : '',
    			'lastname' => $lastname,
    			'email' => $email,
    			'password' => bcrypt($password),
    			'avatar' => $avatar
    		]);

    		return (isset($avatar)) ? $avatar->store('avatars') : false;
    	}

    	return Response::json([
    		'error' => "No data provided, resource could not be created"
    	]);
    }

    /**
     * update the existing user resource
     * @param  UpdateUserRequest
     * @return [type]
     */
    public function update(UpdateUserRequest $request)
    {
    	$data = $request->all();

    	if( $data ) 
    	{
    		$firstname = $request->get('firstname');
    		$middlename = $request->get('middlename');
      		$lastname = $request->get('lastname');
    		$email = $request->get('email');
    		$avatar = $request->file('avatar');

    		$this->user->updateUserWith([
    			'firstname' => $firstname,
    			'middlename' => (isset($middlename)) ? $middlename : '',
    			'lastname' => $lastname,
    			'email' => $email,
    			'avatar' => $avatar
    		]);

    		$pathFile = Storage::putFile('avatars', $avatar); 

    		return (isset($avatar)) ? $pathFile : false;
    	}

    	return Response::json([
    		'error' => "No data provided to be updated, resource could not be updated"
    	]);
    }

    /**
     * Delete Exising resource
     * @param  Request
     * @param  [type]
     * @return [type]
     */
    public function delete(Request $request, $id)
    {
    	$id = $request->get('id');

    	$this->user->deleteUserWithId($id);
    }
}
