<?php

namespace App\Http\Controllers;

use App\Models\Ehson;
use Illuminate\Http\Request;

class EhsonController extends Controller
{
    public function ehsonlar(){
        $data=Ehson::all();
        return view('admin.ehsonlar.ehsonshow',['data'=>$data]);
    }
    public function addehson(){


        return view('admin.ehsonlar.addehson');
    }
    public function storeehson(Request $request){
        $data=new Ehson();
        $data->title=$request->title;
        $data->text=$request->text;
        $data->summa=$request->summa;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->cart_num1=$request->cart_num1;
        if ($request->cart_num2){
            $data->cart_num2=$request->cart_num2;
        }
        $image=$request->img;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->img->move('imgehson',$imagename);
        $data->img=$imagename;
        $data->save();
        return redirect(route('ehsonlar'));



    }
}