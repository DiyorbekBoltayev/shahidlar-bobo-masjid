@extends('user.master')
@section('content')
    <div class="m-5 d-flex justify-content-center align-items-center" >
        <form class="m-5" action="{{route('adminakanmi')}}" method="post">
            @csrf
            <h2 class="text text-primary">Admin sifatida kirish</h2>
            <div class="form-floating mb-3">
                <input type="text" name="login" class="form-control" id="floatingInput" autocomplete="off" placeholder="Login">

            </div>
            <div class="form-floating">
                <input type="password" name="parol" class="form-control" id="floatingPassword" autocomplete="off" placeholder="Parol">
                <input  type="submit" class="btn w-100 btn-outline-primary mt-2" value="Kirish">
            </div>

        </form>
    </div>
@endsection
