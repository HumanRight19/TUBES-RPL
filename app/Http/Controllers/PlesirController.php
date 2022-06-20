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

    public function destinasiPage(){
        return view('destinasi');
    }
}
