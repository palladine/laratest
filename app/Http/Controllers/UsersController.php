<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function welcome() {
              return view('welcome');
    }


    public function post_registration(Request $request){
    	
    	//validation
              $this->validate($request, [
                        'username' => 'required|max:120',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|min:4',
               ]);

    	$user = new Users();
    	$user->username = $request['username'];
    	$user->email = $request['email'];
    	$user->password = bcrypt($request['password']);
    	$user->save();

             $message = "Пользователь с именем ". $user->username." создан!";

              Auth::login($user);

    	return redirect()->route('welcome')->with(['message' => $message]);

    }

    public function login(Request $request){
        
              // validation
             $this->validate($request, [
                        'username' => 'required|max:120',
                        'password' => 'required|min:4',
               ]);

 	if (Auth::attempt(['username'=>$request['username'],
 		                  'password'=>$request['password']])) {
                            $message = "Выполнен вход под именем ".Auth::user()->username."!";
 		return redirect()->route('welcome')->with(['message' => $message]);
 	}
    	return redirect()->route('main');
    }

    public function logout() {
            Auth::logout();
            $message = "Выход выполнен!";
            return redirect()->route('main')->with(['message' => $message]);
    }

}
