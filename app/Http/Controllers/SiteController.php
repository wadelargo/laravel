<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function user(){
        return view('users');
    }
    public function trainor(){
        return view('trainor');
    }
}
