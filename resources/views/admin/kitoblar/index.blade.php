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


            <form action="{{url('sendbooks')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="title"> Kitob qo'shish</h1>

                <div class="div" style="padding: 20px;">
                    <label> Nomi </label>
                    <input class="form-control w-50 text-black"  type="text" name="nomi" placeholder=" Kitob nomi" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Kitob Muallifi </label>
                    <input class="form-control w-50 text-black"  type="text" name="muallifi" placeholder=" Muallifi" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                    <input type="file" name="rasm" class="form-control w-50 text-black">
                </div>

                <div class="div" style="padding: 20px;">
                    <label for="exampleInputPassword1" class="form-label">Kitob tanlang</label>
                    <input type="file" name="kitob" class="form-control w-50 text-black">
                </div>

                <div class="div" style="padding: 20px;">

                    <button class="btn btn-primary " type="submit" name="submit" > Qo'shish </button>

                </div>

            </form>

        </div>

    </div>



@endsection
