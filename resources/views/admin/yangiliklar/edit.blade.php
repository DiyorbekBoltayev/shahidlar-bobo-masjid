@extends('admin.master')
@section('content')

    <div class="container-fluid page-body-wrapper">


    <h1 class="text text-center">Yangilikni tahrirlash </h1>
    <div class="container ">
        <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="">

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1"> Mavzusi </label>
                    <input type="text" name="mavzu" class="form-control" id="floatingInput1" value="{{$data->mavzu}}" required placeholder="Yangilik mavzusi...">
                </div>

                <div class="form-floating mb-3" >
                    <label class="text text-primary" for="floatingInput1"> Matni</label>
                    <textarea name="matn" class="form-control text-black" id="floatingInput1" rows="10" cols="50" placeholder="Yangilik matni.." >{{$data->matn}}</textarea>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 col-sm-12 "><img src="/newsimage/{{$data->rasm}}" style="width: 100%; height: 100%;" alt=""></div>
                </div>

                <div class="form-floating mb-3" >
                    <label for="exampleInputPassword1" class="form-label">Rasmni tanlang</label>
                    <input type="file" name="rasm" class="form-control  text-black">
                </div>

                <div class="form-floating mb-3" >

                    <button class="btn btn-primary  form-control" type="submit" name="submit" > Saqlash </button>

                </div>
            </div>
        </form>
    </div>
    </div>



@endsection
