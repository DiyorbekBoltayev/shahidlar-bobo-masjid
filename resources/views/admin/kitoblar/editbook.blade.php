@extends('admin.master')
@section('content')

    <h1 class="text text-center">Kitobni yangilash </h1>
    <div class="container ">
        <form action="{{url('sendbooks')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-100">

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1"> Nomi </label>
                    <input type="text" name="nomi" class="form-control" id="floatingInput1" value="{{$data->nomi}}"
                           required placeholder="Kitob nomini kiriting">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Kitob Muallifi </label>
                    <input type="text" name="muallifi" class="form-control" id="floatingInput1" value="{{$data->avtor}}"
                           required placeholder="Muallif">
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 col-sm-12 "><img src="/newsimage/{{$data->rasm}}"
                                                                 style="width: 100%; height: 100%;" alt=""></div>
                </div>
                <div class="form-floating mb-3">
                    <label for="exampleInputPassword1" class="form-label">Rasmni yangilash uchun boshqa rasm
                        tanlang</label>
                    <input type="file" name="rasm" class="form-control  text-black">
                </div>
                <a class="form-control btn-primary text-center" href="{{route('yukla',$data->id)}}" > Hozirgi faylni yuklab olish </a>
                <div class="form-floating mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kitob faylini yangilash uchun boshqa fayl
                        tanlang</label>
                    <input type="file" name="kitob" class="form-control  text-black">
                </div>

                <div class="form-floating mb-3">

                    <button class="btn btn-primary  form-control" type="submit" name="submit"> Saqlash</button>

                </div>
            </div>
        </form>


    </div>

@endsection
