<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function login(){
    	return view('index');
    }

    public function postlogin(Request $request){
    	if(Auth::attempt($request->only('email', 'password'))){
    		return redirect('/home');
    	}
    	return redirect('/');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }

    public function getregister(){
        return view('register');
    }

    public function postregister(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/');
    }
}
