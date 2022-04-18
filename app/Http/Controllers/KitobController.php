<?php

namespace App\Http\Controllers;

use App\Models\Kitob;
use Illuminate\Http\Request;

class KitobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 return view('admin.kitoblar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $data = new Kitob();
        $data->nomi=$request->nomi;
        $data->avtor=$request->muallifi;
        $image=$request->rasm;
        $book=$request->kitob;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->rasm->move('newsimage',$imagename);

        $data->rasm=$imagename;

        $bookname=time().'.'.$book->getClientOriginalExtension();
        $request->kitob->move('bookimage',$bookname);
        $data->file=$bookname;

        $data->save();
        return redirect(route('addnews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $data=Kitob::all();
      return  view('admin.kitoblar.showbook', [
          "dat"=>$data
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Kitob::find($id);

        return view('admin.kitoblar.editbook', compact('data'));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
