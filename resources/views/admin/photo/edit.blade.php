@extends('admin.master')
@section('content')

    <div class="container" >
        <h1 class="text-primary text text-center">Rasm Tahrirlash</h1>
        <div class="w-100">
            <form action="{{url('photoupdate',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Nomi</label>
                    <input type="text" name="name" class="form-control" id="floatingInput1" required
                           value="{{$data->name}}" placeholder="Rasm nomi..">
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Oldingi rasm</label><br>
                    <img style="width: 50%; height: 50%; margin: auto" src="/photo/{{$data->photo}}" alt="">
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Rasm yuklang</label>
                    <input type="file" name="photo" class="form-control " id="floatingInput" ">
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput"
                           value="Barcha Ma'lumotlarni Saqlash">
                </div>
            </form>

        </div>
    </div>

@endsection

