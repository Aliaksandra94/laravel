<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $user = User::query()->where('id', '=', 1)->where('name', '=', 'Test User')->get();
        return $user;
        //return view('home');
    }
}
