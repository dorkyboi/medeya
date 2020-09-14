<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class AdminLoginController extends LoginController
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm() {
        return view('auth.admin.login');
    }

    protected function loggedOut(Request $request) {
        return redirect(route('admin.login'));
    }
}
