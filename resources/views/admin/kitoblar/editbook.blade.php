@extends('admin.master')
@section('content')

    <h1 class="text text-center">Yangilikni yangilash </h1>
    <div class="container d-flex justify-content-center">

        <form action="{{url('update',$data->id)}}" method="post" class="w-50" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Book Nomi</label>
                <input type="text" name="mavzu" class="form-control text-black" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nomi}}" required >
            </div>

            <div class="form-floating">
                <label for="floatingTextarea2" name="matn" >Book autor </label>
                <textarea  name="matn" class="form-control text-black" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px">{{$data->avtor}}"</textarea>

            </div>
            <br>

            <div class="mb-3">
                <img style="width: 100px; height: 100px;" src="/newsimage/{{$data->rasm}}" alt="Oldingi rasm">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                <input type="file" name="rasm" class="form-control text-black" id="exampleInputPassword1">
            </div>

             <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">File tanlang</label>
                <input type="file" name="rasm" class="form-control text-black" id="exampleInputPassword1">
            </div>


            <button type="submit" class="btn btn-primary">Yangilash</button>
        </form>
    </div>


@endsection
