<?php

namespace LaravelBoilerplate\Http\Controllers\Auth;

use LaravelBoilerplate\User;
use LaravelBoilerplate\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = route('auth.login');
        $this->redirectTo = route('backend.dashboard');
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogin']);
    }
}
