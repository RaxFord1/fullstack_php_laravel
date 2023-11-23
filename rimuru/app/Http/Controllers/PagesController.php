<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function kleopatra(){
        return view('kleopatra');
    }

    public function napoleon(){
        return view('napoleon');
    }

    public function leo(){
        return view('leo');
    }
}
