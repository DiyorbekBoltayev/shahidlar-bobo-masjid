@extends('admin.master')
@section('content')

    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" >

            @if(session()->has('xabar'))

                <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" data-target="alert"  > x </button>

                </div>

            @endif


            <form action="{{url('uploadmaqola')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="title"> Maqola qo'shish</h1>

                <div class="div" style="padding: 20px;">
                    <label> Mavzusi </label>
                    <input class="form-control w-50 text-black"  type="text" name="mavzu" placeholder=" Maqola mavzusi.." required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Matni </label>
                    <textarea name="matn" class="form-control text-black w-50" placeholder="Maqola matni.." ></textarea>

                </div>

                <div class="div" style="padding: 20px;">
                    <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                    <input type="file" name="rasm" class="form-control w-50 text-black">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Autori </label>
                    <input class="form-control w-50" style="color: black" type="text" name="autor" placeholder=" Autori.. " required="">
                </div>

                <div class="div" style="padding: 20px;">

                    <button class="btn btn-primary " type="submit" name="submit" > Qo'shish </button>

                </div>

            </form>

        </div>

    </div>


@endsection
