@extends('admin.master')
@section('content')

<div class="container-fluid page-body-wrapper">

    <div class="container"  style="" >

        @if(session()->has('xabar'))

            <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" data-target="alert"  > x </button>

            </div>

        @endif


        <form action="{{url('sendnews')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="title"> Yangilik qo'shish</h1>
            <div class="w-100">

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1"> Mavzusi </label>
                    <input type="text" name="mavzu" class="form-control" id="floatingInput1" required placeholder="Yangilik mavzusi...">
                </div>

            <div class="form-floating mb-3" >
                <label class="text text-primary" for="floatingInput1"> Matni</label>
                <textarea name="matn" class="form-control text-black" id="floatingInput1" rows="10" cols="50" placeholder="Yangilik matni.." ></textarea>
            </div>


            <div class="form-floating mb-3" >
                <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                <input type="file" name="rasm" class="form-control  text-black">
            </div>

            <div class="form-floating mb-3" >

                <button class="btn btn-primary  form-control" type="submit" name="submit" > Qo'shish </button>

            </div>
            </div>
        </form>

    </div>

</div>



@endsection
