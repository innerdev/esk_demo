<?php

namespace App\Http\Controllers;

use App\Traits\MyAuthenticatesUsers;

class LoginController extends BaseController
{
    use MyAuthenticatesUsers;

    protected $redirectTo = "/";

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
