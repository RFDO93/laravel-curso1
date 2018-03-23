<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname = null){
        return view('welcome',compact('name','nickname'));
    }
}
