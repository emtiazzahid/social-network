<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;


class UserController extends Controller
{
    //
	public function  getDashboard(){
		return view('dashboard');
	}
    public function postSignUp(Request $request){
        $this->validate($request,[
                'email' => 'required|email|unique:users',
                'name'  =>  'required|max:120',
                'password' => 'required|min:4'
            ]);

    	$name = $request['name'];
    	$email = $request['email'];
    	$password = bcrypt($request['password']);

    	$user = new User();
    	
    	$user->name = $name;
    	$user->email = $email;
    	$user->password = $password;

    	$user->save();

    	return redirect()->route('dashboard');

    	// dd($request->all());
    }

    public function postSignIn(Request $request){
    	//dd($request->all());
		if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
			return redirect()->route('dashboard');
		}
		session()->flash('message','Wrong email or password!');
		return redirect()->route('index');
    }

	public  function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public  function login(){
		return redirect()->route('index');
	}
}
