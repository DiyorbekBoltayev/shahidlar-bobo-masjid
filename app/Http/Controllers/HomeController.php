<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yangilik;

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
        $data=Yangilik::all();
        return view('user.yangiliklar',compact('data',$data));
    }

    public function kitoblar()
    {
        return view('user.kitoblar');
    }


}
