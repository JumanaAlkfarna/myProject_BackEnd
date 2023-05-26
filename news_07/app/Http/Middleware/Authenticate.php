<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

          // if ($this->auth->guard('admin')) {

        //     // $loginroute = 'dashboard.login';

        //     // return route($loginroute,'admin');

        //     return route('dashboard.login', 'admin');
        // }
        // else if ($this->auth->guard('company')) {

        //     // $loginroute = 'dashboard.login';

        //     // return route($loginroute,'admin');

        //     return route('dashboard.login', 'company');

        if ($this->auth->guard('admin')) {
            return route('view.login', 'admin');
        }
    }
}
