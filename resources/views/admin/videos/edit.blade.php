@extends('admin.master')
@section('content')

    <div class="container" style="">
        <h1 class="text-primary text text-center">Videoni tahrirlash</h1>
        <div class="w-100">

            <form action="{{route('video.update',$data->id)}}" method="POST" accept-charset="UTF-8"
                  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput"> Video nomi </label>
                    <input type="text" value="{{$data->name}}" name="name" class="form-control"
                           id="header_ru" placeholder="">
                </div>

                <div class="form-floating">
                    <label class="text text-primary" for="floatingInput"> Oldingi video  </label> <br>
                    <iframe width="300" height="150" src="{{$data->url}}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Yangi url manzulni yozing</label>
                    <input type="text" name="url" class="form-control" id="header_ru" placeholder=" ">
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput" value="Barcha Ma'lumotlarni Saqlash">
                </div>
            </form>


        </div>
    </div>


@endsection

