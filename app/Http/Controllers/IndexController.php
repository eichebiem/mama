<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function our_clients()
    {
        return view('our_clients');
    }



}
