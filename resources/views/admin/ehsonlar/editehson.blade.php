@extends('admin.master')
@section('content')
    <div class="container" style="">
        <h1 class="text-primary text text-center">Ehsonni tahrirlash</h1>
        <div class="w-100">
            <form action="{{route('editsave',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Ehson haqida qisqacha ma'lumot kiriting</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="floatingInput1" required placeholder="Kiriting...">
                </div>




                <div class="form-floating">
                    <label class="text-primary" for="floatingTextarea2">Ehson haqida batafsil ma'lumot kiriting</label>
                    <textarea class="form-control" name="text"  placeholder="Batafsil ma'lumot" rows="10"  required id="floatingTextarea2" >{{$data->text}}</textarea>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 col-sm-12 "><img src="/imgehson/{{$data->img}}" style="width: 100%; height: 100%;" alt=""></div>
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Rasmni yangilash uchun boshqa rasm yuklang</label>
                    <input type="file" name="img" class="form-control " id="floatingInput" >
                </div>
                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput" value="Barcha Ma'lumotlarni Saqlash">
                </div>
            </form>

        </div>
    </div>

@endsection
