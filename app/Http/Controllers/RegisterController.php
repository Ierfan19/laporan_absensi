<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    function getViewRegister(){
        return view('/register');
    }
    function store(){
        $validatedData = Request::validate([
            'name' => 'required|min:3|max:20|unique:users',
            'email' => 'required',
            'password' => 'required|min:3'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'berhasil');
    }
}
