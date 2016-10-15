<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    //
    public function postSignUp(Request $request){
    	$name = $request['name'];
    	$email = $request['email'];
    	$password = bcrypt($request['password']);

    	$user = new User();
    	
    	$user->name = $name;
    	$user->email = $email;
    	$user->password = $password;

    	$user->save();

    	return redirect()->back();

    	// dd($request->all());
    }

    public function postSignIn(){
    	
    }
}
