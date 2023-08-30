<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function checkUser(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
 
        return back()->with('failed', 'Wrong Email/Password. Please Check Again');
    }

    public function logout(){
        Auth::logout();
        return view('logout');
    }
}
