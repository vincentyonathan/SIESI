<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login_page()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        dd($request);

        $cridentials = $request->only('email','password');
        if(Auth::attempt($cridentials)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('login');
            }
            else {
                return redirect()->route('login');
            }
        }
    }
}
