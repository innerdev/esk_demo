<?php

namespace App\Traits;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

trait MyAuthenticatesUsers
{
    use AuthenticatesUsers {
        AuthenticatesUsers::showLoginForm as noNeed;
    }

    public function showLoginForm() {
        return view('login');
    }
}
