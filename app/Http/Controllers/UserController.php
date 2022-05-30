<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    

    function getViewUser(){
        $dataParameter['listuser'] = User::all();
        // $pw = User::all();
        // $dataParameter['encript'] = Crypt::encryptString($);
        return view('/user', $dataParameter);
    }
    function getViewLogin(){
        return view('/login');
    }
    function authenticate(){
        $credential = Request::validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            Request::session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('error', 'Gagal Login');
    }
    function logout(){
        Auth::logout();

        Request::session()->invalidate();
        Request::session()->regenerateToken();

        return redirect('/');
    }
}
