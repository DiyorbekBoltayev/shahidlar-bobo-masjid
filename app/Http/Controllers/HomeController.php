<?php

namespace App\Http\Controllers;

use App\Models\Ehson;
use App\Models\Maqola;
use Illuminate\Http\Request;
use App\Models\Yangilik;

class HomeController extends Controller
{
    public function index()
    {
        $data = Yangilik::all();
        $dat = Maqola::paginate(1);

        return view('user.index',[
            'data'=>$data,
            'dat'=>$dat
        ]);


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
    {   $data=Ehson::paginate(2);
        return view('user.ehson',['data'=>$data]);
    }

    public function yangiliklar()
    {
        $data=Yangilik::paginate(2);
        return view('user.yangiliklar',['data'=>$data]);
    }

    public function kitoblar()
    {
        return view('user.kitoblar');
    }


}
