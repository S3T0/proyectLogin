<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){

        if(Auth::check()){

            return redirect('/home');

        }else{

            return view('auth.register');

        }

    }

    public function register(RegisterRequest $request){ 
        $data = $request->validated();

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        
        return redirect('/login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
    }
}
