<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yangilik;

class FayzullaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//    }
    public function addnews(){
        return view('admin.yangiliklar.addnews');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Yangilik();
        $data->mavzu=$request->mavzu;
        $data->matn=$request->matn;
        $image=$request->rasm;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->rasm->move('newsimage',$imagename);
        $data->rasm=$imagename;
        $data->save();
        return redirect(route('addnews'));
//        return view('admin.yangiliklar.addnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data=Yangilik::all();
        return view('admin.yangiliklar.shownews',compact('data',$data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $data=Yangilik::find($id);
     return view('admin.yangiliklar.edit',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Yangilik::find($id);
        $data->mavzu=$request->mavzu;
        $data->matn=$request->matn;
        if($request->rasm !=null){
            $image=$request->rasm;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->rasm->move('newsimage',$imagename);
            $data->rasm=$imagename;
        }
        $data->save();
        $data=Yangilik::all();
        return view('admin.yangiliklar.shownews',compact('data',$data));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Yangilik::find($id);
        $data->delete();

        $data=Yangilik::all();
        return view('admin.yangiliklar.shownews',compact('data',$data));
    }
}
