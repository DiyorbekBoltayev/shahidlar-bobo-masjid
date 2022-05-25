@extends('admin.master')
@section('content')

    <div class="container-fluid page-body-wrapper">

        <div class="container"  >
            @if(session()->has('xabar'))
                <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" data-target="alert"  > x </button>
                </div>
            @endif
            <form action="{{url('sendbooks')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <h1 class="title"> Kitob qo'shish</h1>
                    <div class="w-100">

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput1"> Nomi  </label>
                            <input type="text" name="nomi" class="form-control" id="floatingInput1" required placeholder="Kitob nomini kiriting">
                        </div><div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput1">Kitob Muallifi  </label>
                            <input type="text" name="muallifi" class="form-control" id="floatingInput1" required placeholder="Muallif">
                        </div>


                        <div class="form-floating mb-3" >
                            <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                            <input type="file" name="rasm" class="form-control  text-black">
                        </div>
                        <div class="form-floating mb-3" >
                            <label for="exampleInputPassword1" class="form-label">Kitob faylini tanlang</label>
                            <input type="file" name="kitob" class="form-control  text-black">
                        </div>

                        <div class="form-floating mb-3" >

                            <button class="btn btn-primary  form-control" type="submit" name="submit" > Saqlash </button>

                        </div>
                    </div>
                </form>


        </div>

    </div>



@endsection
