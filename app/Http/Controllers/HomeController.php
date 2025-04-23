<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $myname = 'jehad';
        $myage = 24;
        return view('home', compact('myname', 'myage'));
    



    }
}
