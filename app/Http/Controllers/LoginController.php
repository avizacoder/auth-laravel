<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function store() 
    {
        $credencials= request()->only('email', 'password');

        $message = 'The email or password is incorrect, please try again.';
        if(!Auth::attempt($credencials)) {
            return redirect('/login')
                    ->withErrors($message)  
                    ->withInput();   
        }

        $notification = 'The login is success';
        return redirect('/')->with(compact('notification'));
    }

    public function destroy() {
        auth()->logout();
        return redirect()->to('/');
    }
}
