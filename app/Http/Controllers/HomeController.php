<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // *------------Checking if user is logged in before accessing site------------
        if(session()->has('loguser') || session()->has('logadmin'))
        {
            return view('index');
        }else{
            return view('index');
        }
    }
}
