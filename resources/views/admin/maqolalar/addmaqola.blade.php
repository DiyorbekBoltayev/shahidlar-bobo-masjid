@extends('admin.master')
@section('content')

    <div class="container" style="background: #ebedf2">
        <h1 class="text-primary text text-center">Maqola qo'shish</h1>
        <div class="w-100">
            <form action="{{route('uploadmaqola')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Mavzusi</label>
                    <input type="text" name="mavzu" class="form-control" id="floatingInput1" required placeholder="Maqola matni..">
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Matini</label>
                    <input type="text" name="matn" class="form-control" id="floatingInput1" required placeholder="Maqola matni..">
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Rasm yuklang</label>
                    <input type="file" name="rasm" class="form-control " id="floatingInput" required >
                </div>

                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Autori</label>
                    <input type="text" name="autor" class="form-control" id="floatingInput1" required placeholder="Rasm kiriting..">
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput" value="Barcha Ma'lumotlarni Saqlash">
                </div>

            </form>

        </div>
    </div>

@endsection
