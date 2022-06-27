<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlesirController extends Controller
{
    public function index(){
        return view('index');
    }

    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function destinasiPage(){
        return view('destinasi');
    }

    public function aboutPage(){
        return view('about');
    }

    public function keratonPage(){
        return view('keraton');
    }

    public function puraPage(){
        return view('pura');
    }

    public function heritagePage(){
        return view('heritage');
    }

    public function balekambangPage(){
        return view('balekambang');
    }

    public function detailbayarPage(){
        return view('detailbayar');
    }

    public function buktiPage(){
        return view('bukti');
    }

    public function profilePage(){
        return view('profile');
    }

    public function verifyPage(){
        return view('verify');
    }

    public function forgotPage(){
        return view('forgot');
    }
}
