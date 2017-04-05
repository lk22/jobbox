<?php

namespace JobDesk\Http\Controllers;

use File;
use Response;

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
    public function user()
    {
    	// $user = $this->user->findBySlug($slug)->get();

    	// return $user;
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
    	$latestUsers = $this->user->latest();

        $js_variables = [
            'latestUsers' => $latestUsers
        ];

    	return $js_variables;
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
    	} else {
            return Response::json([
                'error' => "No data provided, resource could not be created"
            ]);
        }
    }

    /**
     * update the existing user resource
     * @param  UpdateUserRequest
     * @return [type]
     */
    public function update(Request $request, $slug)
    {
    	$data = $request->all();

        $user = $this->user->whereSlug(
            $slug
        )->firstOrFail();

        // dd($data);

    	if($data && $user)
    	{
    		$user->firstname = $request->get('firstname');

            if($request->has('middlename'))
                $user->middlename = $request->get('middlename');

      		$user->lastname = $request->get('lastname');
            $user->name = $request->get('firstname') . ' ' . $request->get('lastname');
            $user->description = trim($request->get('description', '<p>'));
            $user->job_position = $request->get('job_position');
            $user->dream_job_title = $request->get('dream_job_title');
    		$user->email = $request->get('email');

            if($request->has('avatar'))
    		  $user->avatar = $request->file('avatar');

            $user->save();

            // if(!is_null($request->get('avatar'))
                // File::putFile('avatars', $request->get('avatar'));
    		
    	}

    	return redirect()->back();
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
