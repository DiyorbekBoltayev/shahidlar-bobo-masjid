<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\VidoModel;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::paginate(4);
        return view('admin.videos.index',[ 'data' => $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Video();
        $data->name = $request->name;

        $url = $request->url;
        $ss="";
        $youtube = "https://www.youtube.com/embed/";
        for ( $i = strlen($url)-1; $i>0; $i-- ){
            if ($url[$i]=='/'){
                break;
            }
            $ss=$url[$i].$ss;

        }
        $youtube.=$ss;

        $data->url = $youtube;

        $data->save();

        return redirect(url('video'));
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

    public function showw()
    {
        $data = Video::paginate(4);
        return view('user.video',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = Video::find($id);

        return view('admin.videos.edit', [
            'data' => $videos,
        ]);
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
        $videos = Video::find($id);

        $videos->name = $request->name;
        if ($request->url != null) {

            $url = $request->url;
            $ss="";
            $youtube = "https://www.youtube.com/embed/";
            for ( $i = strlen($url)-1; $i>0; $i-- ){
                if ($url[$i]=='/'){
                    break;
                }
                $ss=$url[$i].$ss;

            }
            $youtube.=$ss;

            $videos->url = $youtube;

        }
        $videos->save();

        return redirect(url('video'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::find($id);
        $data->delete();

        return redirect(url('video'));

    }
}
