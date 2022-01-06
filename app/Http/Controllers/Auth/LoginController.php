<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo()
    {

        switch (Auth::user()->role_id) {

            case 1:$this->redirectTo = '/admin/home';
                return $this->redirectTo;
                break;
            case 2:$this->redirectTo = '/client/home';
                return $this->redirectTo;
                break;
            case 3:$this->redirectTo = '/user/home';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
                break;

        }
    }

    protected function authenticated(Request $request, $user)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->flash('name', Auth::user()->firstname);
            return redirect()->intended('/admin/home');
        }
    }

    protected function loggedOut(Request $request)
    {
        $request->session()->flash('flash', 'Hope to see you soon!');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
