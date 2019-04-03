<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* Į login kontrolerį gali patekti tik svečias (neprisijungęs vartotojas). Uždejus guest middleware suveikia RedirectIfAuthenticated.php middlewaras.
        Middleware grupes galima rasti Kernel.php.

        Except reiškia, jog neuždės ant logout routo guest middleware grupės. */
        $this->middleware('guest')->except('logout');
    }
}
