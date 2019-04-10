<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Auth0IndexController extends Controller
{
    //
     /**
     * Redirect to the Auth0 hosted login page
     * 
     * @return mixed
     */
    public function login()
    {
        $authorize_params = [
            'scope' => 'openid email email_verified',
            // Use the key below to get an access token for your API.
            // 'audience' => config('laravel-auth0.api_identifier'),
        ];
        return \App::make('auth0')->login(null, null, $authorize_params);
    }

    /**
     * Log out of Auth0
     * 
     * @return mixed
     */
    public function logout()
    {
        \Auth::logout();
        return  \Redirect::intended('/');
    }
}
