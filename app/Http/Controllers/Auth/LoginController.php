<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

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
    protected $redirectTo = '/dashboard_ebus';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){ 
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/login');
    }

    // protected function credentials(Request $request) 
    // { 
    //     $field = filter_var($request->get($this->username()), 
    //     FILTER_VALIDATE_EMAIL) ? $this->username() : 'username';

    //     return [$field => $request->get($this->username()), 'password' => 
    //     $request->password,]; 
    // }

    // public function login(Request $request){
    //     $this->validate($request, [ 
    //         'username'  => 'required',
    //         'password'  => 'required'  ]);
    //     $username_required = $request->get('username');
    //     $password_required = $request->get('password');
    //     $users=User::all()->toArray();
        
    //     foreach ($users as $user) {
    //         $username=$user['username'];
    //         $password=$user['password'];
    //         if($username_required == $username && $password_required == $password){
    //             $access = 1;
    //         }
    //     }

    //     dd($test);
    //     if($access == 1){
    //         return view('ebus');
    //     }else{
    //         return view('login');
    //     }
    // }
}
