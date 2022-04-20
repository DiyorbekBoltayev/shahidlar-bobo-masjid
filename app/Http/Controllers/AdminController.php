<?php

namespace App\Http\Controllers;

use App\Models\Ehson;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data=Ehson::all();
        return view('admin.ehsonlar.ehsonshow',['data'=>$data]);
    }


}
