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

    public function aspekpekerjaan(){
        return view('Admin.aspek-pekerjaan');
    }

    public function aspekrelasi(){
        return view('Admin.aspek-relasi');
    }

    public function aspeksuasanakerja(){
        return view('Admin.aspek-suasanakerja');
    }

    public function aspeksarana(){
        return view('Admin.aspek-sarana');
    }

    public function aspekpengembangan(){
        return view('Admin.aspek-pengembangan');
    }

    public function aspekpendapatan(){
        return view('Admin.aspek-pendapatan');
    }





    public function logout(){
        auth::logout();
        return redirect('/');
    }
}
