<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enlaces extends Controller
{
    

    public function index(){

        return view('home');


    }



    public function productos(){

        return view('productos');


    }
}
