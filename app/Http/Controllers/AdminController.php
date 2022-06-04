<?php

namespace App\Http\Controllers;

use App\Models\Ehson;
use Illuminate\Http\Request;
use App\Models\Namoz;
class AdminController extends Controller
{
    public function index(){
        $data = Namoz::all();
        return view('admin.shownamoz', compact('data'));
//
    }



public function  addnamoz(Request $request){
        $data=new Namoz();
        $data->Tong=$request->tong;
        $data->Bamdod=$request->bamdod;
        $data->Quyosh=$request->quyosh;
        $data->Peshin=$request->peshin;
        $data->Asr=$request->asr;
        $data->Shom=$request->shom;
        $data->Xufton=$request->xufton;
        $data->save();
        return redirect(route('namoztime'));


}

public function shownamoz(){
    $data = Namoz::all();
    return view('admin.shownamoz', compact('data'));
}

public function editnamoz($id){
        $data = Namoz::find($id);
    return view('admin.editnamoz',compact('data'));
}

public  function  updatenamoz(Request $request,$id){
    $data = Namoz::find($id);
    $data->Tong=$request->tong;
    $data->Bamdod=$request->bamdod;
    $data->Quyosh=$request->quyosh;
    $data->Peshin=$request->peshin;
    $data->Asr=$request->asr;
    $data->Shom=$request->shom;
    $data->Xufton=$request->xufton;
    $data->save();
    $data=Namoz::all();
    return view('admin.shownamoz', compact('data'));
}



}
