@extends('admin.master')
@section('content')
    <div class="container" style="">
        <h1 class="text-primary text text-center">Ehson qo'shish</h1>
        <div class="w-100">
            <form action="{{url('storeehson')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Ehson haqida qisqacha m'lumot kiriting</label>
                    <input type="text" name="title" class="form-control" id="floatingInput1" required placeholder="Kiriting...">
                </div>
                <div class="form-floating">
                    <label class="text-primary" for="floatingTextarea2">Ehson haqida batafsil ma'lumot kiriting</label>
                    <textarea class="form-control" name="text" rows="10" placeholder="Batafsil ma'lumot"  required id="floatingTextarea2" ></textarea>
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Rasm yuklang</label>
                    <input type="file" name="img" class="form-control " id="floatingInput" required >
                </div>
                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput" value="Barcha Ma'lumotlarni Saqlash">
                </div>
            </form>

        </div>
    </div>

@endsection
