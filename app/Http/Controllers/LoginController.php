<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.Login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }
    public function logout(){
        auth::logout();
        return redirect('/');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
       //dd($request->all());

       User::create([
           'name' => $request->name,
           'level' => 'admin',
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'remember_token' => Str::random(60),
       ]);

       return view('welcome');


    }

}
