<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use JobDesk\User;

class UserTest extends TestCase
{
	/**
	 * @test
	 */
   	public function user_model_fillable_property()
   	{
   		$user = factory(User::class)->make();

   		$this->assertAttributeContains('firstname', 'fillable', $user);
   		$this->assertAttributeContains('middlename', 'fillable', $user);
   		$this->assertAttributeContains('lastname', 'fillable', $user);
   		$this->assertAttributeContains('email', 'fillable', $user);
   		$this->assertAttributeContains('password', 'fillable', $user);
   		$this->assertAttributeContains('avatar', 'fillable', $user);
   		$this->assertAttributeContains('dream_job_title', 'fillable', $user);
   	}

   	/**
   	 * @test
   	 */
   	public function user_model_has_hidden_protected_fields() 
   	{
   		$user = factory(User::class)->make();

   		$this->assertAttributeContains('password', 'hidden', $user);
   		$this->assertAttributeContains('remember_token', 'hidden', $user);
   	}

   	/** 
   	 * @test
   	 */
   	public function user_model_can_find_user_by_id()
   	{
   		$user = factory(User::class)->make();

   		$newUser = $user->findById(1);

   		$this->assertTrue(count($newUser) > 0);
   	}

   	/**
   	 * @test
   	 */
   	public function user_model_can_find_authenticated_user() 
   	{
   		$user = factory(User::class)->make();
   		$this->be($user);

   		$authenticatedUser = $user->isAuthenticated();

   		$this->assertTrue(count($authenticatedUser) > 0);
   	}

   	/**
   	 * @test
   	 */
   	public function user_model_can_order_users_by_specific_order() 
   	{
   		$user = factory(User::class)->make();

   		$ascendingUsers = $user->orderingBy('ASC')->toArray();

   		$descendingUsers = $user->orderingBy('DESC')->toArray();

   		$this->assertTrue(count($ascendingUsers) > 0);
   		$this->assertTrue(count($descendingUsers) > 0);
   	}

   	/**
   	 * @test
   	 */
   	public function user_model_can_create_new_ressource_with_specific_data() 
   	{
   		$user = new User;

   		$user->createUserWith([
   			'firstname' => 'Joan',
   			'middlename' => 'Binder Jeanette',
   			'lastname' => 'Knudsen',
   			'email' => 'joan_binder@hotmail.com',
   			'password' => bcrypt("JoanJoan34"),
   			'remember_token' => str_random(10),
   			'avatar' => 'http://www.zocom.se/en/assets/frontpanel/images/img.png',
   			'is_admin' => 0,
   			'has_active_email' => 0,
   			'dream_job_title' => 'Pædagog'
   		])->delete();
   	}

   	// /**
   	//  * @test
   	//  */
   	// public function user_model_can_update_existing_ressource_with_speicific_data()
   	// {
   	// 	$user = factory(User::class)->create();
   	// 	$updated_user = factory(User::class)->make();

   	// 	$user->updateUserWith([
   	// 		'firstname' => $updated_user->firstname,
   	// 		'middlename' => $updated_user->middlename,
   	// 		'lastname' => $updated_user->lastname,
   	// 		'email' => $updated_user->email,
   	// 		'password' => bcrypt($updated_user->password),
   	// 		'remember_token' => str_random(10),
   	// 		'avatar' => 'http://www.zocom.se/en/assets/frontpanel/images/img.png',
   	// 		'is_admin' => false,
   	// 		'has_active_email' => false,
   	// 		'dream_job_title' => 'Pædagog'
   	// 	]);

   	// 	$this->assertSame($updated_user->firstname, $user->firstname);
   	// 	$this->assertSame($updated_user->middlename, $user->middlename);
   	// 	$this->assertSame($updated_user->lastname, $user->lastname);
   	// 	$this->assertSame($updated_user->email, $user->email);
   	// 	$this->assertSame('http://www.zocom.se/en/assets/frontpanel/images/img.png', $user->avatar);
   	// 	$this->assertSame('Pædagog', $user->dream_job_title);
   	// }

   	/**
   	 * @test
   	 */
   	public function user_model_can_delete_existing_resource_with_id()
   	{
   		$user = factory(User::class)->create();

   		$user->deleteUserWithId($user->id);
   	}
}
