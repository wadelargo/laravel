<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $user = User::orderBy('id')->get();

        return view('user', ['users' => $user]);
    }    
}
