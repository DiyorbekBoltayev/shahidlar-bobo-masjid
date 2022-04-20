@extends('admin.master')
@section('content')
    <div class="container" style="background: #ebedf2">
        <h1 class="text-primary text text-center">Ehsonni tahrirlash</h1>
        <div class="w-100">
            <form action="{{route('editsave',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput1">Ehson haqida qisqacha ma'lumot kiriting</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="floatingInput1" required placeholder="Kiriting...">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput2">Zarur bo'lgan pul miqdorini kiriting</label>
                    <input type="text" name="summa" value="{{$data->summa}}" class="form-control" id="floatingInput2" required placeholder="Kiriting...">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput3">Karta raqamini kiriting</label>
                    <input type="text" name="cart_num1" value="{{$data->cart_num1}}" class="form-control" id="floatingInput3" required placeholder="Kiriting...">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Qo'shimcha karta raqamini kiriting</label>
                    <input type="text" name="cart_num2" value="{{$data->cart_num2}}" class="form-control" id="floatingInput" placeholder="Kiriting...">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Manzilni kiriting</label>
                    <input type="text" name="address" value="{{$data->address}}" class="form-control" id="floatingInput" required placeholder="Kiriting...">
                </div>
                <div class="form-floating mb-3">
                    <label class="text text-primary" for="floatingInput">Telefon raqam kiriting</label>
                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="floatingInput" required placeholder="Kiriting...">
                </div>

                <div class="form-floating">
                    <label class="text-primary" for="floatingTextarea2">Ehson haqida batafsil ma'lumot kiriting</label>
                    <textarea class="form-control" name="text"  placeholder="Leave a comment here"  required id="floatingTextarea2" >{{$data->text}}</textarea>
                </div>
                <img src="/imgehson/{{$data->img}}" style="width: 400px; height: 300px;" alt="">
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
