<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Php;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Image::all();
        return view('admin.photo.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Image();
        $data->name=$request->name;
        $image=$request->photo;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->photo->move('photo',$imagename);
        $data->photo=$imagename;
        $data->save();
        return redirect(url('photoindex'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Image::find($id);
        return view('admin.photo.edit',compact('data'));

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
        $data =  Image::find($id);
        $data->name=$request->name;
        if($request->photo!=null) {
            $image = $request->photo;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->photo->move('photo', $imagename);
            $data->photo = $imagename;
        }
        $data->save();
        return redirect(url('photoindex'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Image::find($id);
        $data->delete();

        return redirect(url('photoindex'));
    }

    public function user(){

        $data = Image::orderBy('id', 'desc')->paginate(6);

        return view('user.gallery',compact('data'));
    }
}
