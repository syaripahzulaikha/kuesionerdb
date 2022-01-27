<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.Home-admin');
    }

    public function datakuesioner(){
        return view('Admin.Data-kuesioner');
    }

    public function logout(){
        auth::logout();
        return redirect('/');
    }
}
