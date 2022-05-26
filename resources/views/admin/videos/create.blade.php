@extends('admin.master')
@section('content')

    <div class="container">
        <h1 class="text-primary text text-center">Video qo'shish</h1>
        <div class="w-100">

            <form action="{{url('video')}}" method="POST" accept-charset="UTF-8"
                  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="services">Video Name</label>
                    <input required="" type="text" name="name" class="form-control" id="photo_name"
                           placeholder="Video Name">
                </div>

                <div class="form-group">
                    <label for="cost">Video url</label>
                    <input required="" type="text" name="url" class="form-control" id="photo" placeholder=" Video Url ">
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput"
                           value="Barcha Ma'lumotlarni Saqlash">

                </div>

            </form>

        </div>
    </div>

@endsection

