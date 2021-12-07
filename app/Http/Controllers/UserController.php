<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class UserController extends Controller
{
    public function login_page()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $cridentials = $request->only('username','password');
        if(Auth::attempt($cridentials)){
            return redirect('/');
        }
        return redirect('/login')->with('error','Invalid Credentials');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
