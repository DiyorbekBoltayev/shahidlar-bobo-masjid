<?php

namespace App\Http\Controllers;

use App\Models\Yangilik;
use Illuminate\Http\Request;
use App\Models\Maqola;

class MaqolaController extends Controller
{

    public function index()
    {
        $data = Maqola::all();
        return view('admin.maqolalar.maqola',compact('data'));

    }


    public function create(Request $request)
    {

    $data = new Maqola();

    $data->mavzu = $request->mavzu;
    $data->matn = $request->matn;
    $data->autor = $request->autor;

    $rasm = $request->rasm;
    $rasmname = time().'.'.$rasm->getClientOriginalExtension();
    $request->rasm->move('maqola_rasm',$rasmname);

    $data->rasm = $rasmname;
    $data->save();

    return redirect()->back()->with('xabar','Malumot muoffaqiyatli qo`shildi!..');

    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        return view('admin.maqolalar.addmaqola');
    }


    public function edit($id)
    {
        $data = Maqola::find($id);
        return view('admin.maqolalar.editmaqola', compact('data'));
    }


     function update(Request $request, $id)
    {
        $data = Maqola::find($id);

        $data->mavzu=$request->mavzu;
        $data->matn=$request->matn;
        $data->autor = $request->autor;

        if($request->rasm !=null){
            $rasm=$request->rasm;
            $rasmname=time().'.'.$rasm->getClientOriginalExtension();
            $request->rasm->move('maqola_rasm',$rasmname);
            $data->rasm=$rasmname;
        }
        $data->save();
        return redirect(route('maqolalar'))->with('xabar','Malumot muoffaqiyatli yangilandi!..');

    }


    public function destroy($id)
    {
        $data = Maqola::find($id);
        $data->dalete();

        return view('admin.maqolalar.editmaqola')->with('xabar','Malumot muoffaqiyatli yangilandi!..');

    }
}
