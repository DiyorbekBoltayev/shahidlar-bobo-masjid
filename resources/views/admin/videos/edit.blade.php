@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Videoni Tahrirlash</h1></div>
                </div>
                <hr>
                <div class="card-body">

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <strong>Oops!</strong> Qandaydir xatolik chiqdi<br><br>--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}


                    <form action="{{route('video.update',$data->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Video name</label>
                            <input type="text" value="{{$data->name}}" name="name" class="form-control"
                                   id="header_ru" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="header_ru">Video_old</label><br>
                            <iframe width="300" height="150" src="{{$data->url}}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                        <div class="form-group">
                            <label for="header_ru">Video new Url</label>
                            <input type="text" name="url" class="form-control" id="header_ru" placeholder=" ">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

