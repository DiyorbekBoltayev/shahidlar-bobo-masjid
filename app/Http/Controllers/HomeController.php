<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function adminmi(){
        return view('user.adminmi');
    }
    public function adminakanmi(Request $request){
        if ($request->login=="admin1" && $request->parol=="1234"){
            return redirect(route('admin'));
        }
        else{
            return redirect(route('adminmi'));
        }
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
