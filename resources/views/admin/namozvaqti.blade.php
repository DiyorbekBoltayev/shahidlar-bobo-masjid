@extends('admin.master')
@section('content')
    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

    <form action="{{url('addnamoz')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="title"> Namoz vaqtlari qo'shish</h1>

        <div class="div" style="padding: 20px;">
            <label> Tong </label>
            <input class="form-control w-50 text-black"  type="text" name="tong" placeholder=" Tong " required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label> Bomdod </label>
            <input class="form-control w-50 text-black"  type="text" name="bamdod" placeholder=" Bamdod " required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label> Quyosh </label>
            <input class="form-control w-50 text-black"  type="text" name="quyosh" placeholder=" Quyosh " required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label> Peshin </label>
            <input class="form-control w-50 text-black"  type="text" name="peshin" placeholder=" Peshin " required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label> Asr </label>
            <input class="form-control w-50 text-black"  type="text" name="asr" placeholder="Asr" required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label>Shom</label>
            <input class="form-control w-50 text-black"  type="text" name="shom" placeholder="Shom" required="">
        </div>

        <div class="div" style="padding: 20px;">
            <label>Xufton</label>
            <input class="form-control w-50 text-black"  type="text" name="xufton" placeholder="Xufton" required="">
        </div>



        <div class="div" style="padding: 20px;">

            <button class="btn btn-primary " type="submit" name="submit"> Qo'shish </button>

        </div>

    </form>

    </div>
    </div>
@endsection
