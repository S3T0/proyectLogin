<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    #form login
    public function show(){
        
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    #login
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Username and/or Password is incorrect');
        }
        
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    #logout
    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

    #redireccionar
    public function authenticated(Request $request, $user){
        return redirect('/home');
    }


}
