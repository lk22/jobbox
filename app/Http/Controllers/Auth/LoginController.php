<?php

namespace JobBox\Http\Controllers\Auth;

use JobBox\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Socialite $provider)
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * redirect the user to Google authentication page
     * @return [type]
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * redirect the user to facebook authentication page
     * @return voide
     */
    public function redirectToFacebook() 
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Handle callback from google
     * @return [type]
     */
    public function handleGoogleCallback() 
    {
        $user = Socialite::driver('google')->user();

        return $user->token;
    }

    /**
     * handle callback from facebook authentication
     * @return void
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        return $user;
    }

}
