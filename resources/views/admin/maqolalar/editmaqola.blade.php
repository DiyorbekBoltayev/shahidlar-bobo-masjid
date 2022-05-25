@extends('admin.master')
@section('content')

    <div class="container" style="">
        <h1 class="text-primary text text-center">Maqolani tahrirlash</h1>
        <div class="w-100">


            <form action="{{url('updatemaqola', $data->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Mavzusi</label>
                    <input type="text" name="title" value="{{$data->mavzu}}" class="form-control" id="floatingInput1" required placeholder="Kiriting...">
                </div>

                <div class="form-floating">
                    <label class="text-primary" for="floatingTextarea2">Matni</label>
                    <textarea class="form-control" name="text"  placeholder="Batafsil ma'lumot" rows="10"  required id="floatingTextarea2" >{{$data->matn}}</textarea>
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Oldingi rasm</label><br>
                    <img style="width: 50%; height: 50%; margin: auto"src="/maqola_rasm/{{$data->rasm}}" alt=" Bu rasm">
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Rasmni yuklang</label>
                    <input type="file" name="img" class="form-control " id="floatingInput" >
                </div>
                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput" value="Barcha Ma'lumotlarni Saqlash">
                </div>
            </form>

        </div>
    </div>


@endsection
