<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function ehson()
    {
        return view('user.ehson');
    }

    public function yangiliklar()
    {
        return view('user.yangiliklar');
    }

    public function maqola()
    {
        return view('user.maqola');
    }


    public function kitoblar()
    {
        return view('user.kitoblar');
    }


}
