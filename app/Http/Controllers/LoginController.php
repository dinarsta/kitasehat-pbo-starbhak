<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        User::Create([
            
            
        ]);
    }

    // public function logout()
    // {
    //     Auth::logout();

    //     request()->session()->invalidate();
    //     request()->session()->regenerateToken();

    //     return redirect('/login');
    // }
}