@extends('admin.master')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 class="text text-center">Yangilik Qo'shish</h1>
<div class="container d-flex justify-content-center">

    <form action="{{url('sendnews')}}" method="post" class="w-50" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Yangilik Mavzusi</label>
            <input type="text" name="mavzu" class="form-control text-black" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-floating">
            <label for="floatingTextarea2">Yangilik matni</label>
            <textarea name="matn" class="form-control text-black" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
            <input type="file" name="rasm" class="form-control text-black" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>


@endsection
