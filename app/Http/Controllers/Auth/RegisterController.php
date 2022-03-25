<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name'=>['required','max:255'],
            'username'=>['required','unique:users','max:255'],
            'email'=>['required','email','unique:users','max:255'],
            'password'=>['required','confirmed'],
        ]);
        //store user
        User::create([
            'name'=> $request->name,
            'username'=>$request->username,
            'email'=> $request->email,
            'password'=>Hash::make($request->password)
        ]);
        //sign in & redirect
        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard');
        }
        
    }
}
