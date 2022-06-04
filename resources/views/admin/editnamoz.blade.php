@extends('admin.master')
@section('content')
    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

            <form action="{{url('updatenamoz',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="title"> Namoz vaqtlari qo'shish</h1>

                <div class="div" style="padding: 20px;">
                    <label> Tong </label>
                    <input class="form-control w-50 text-black"  type="text" name="tong" value="{{$data->Tong}}" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Bamdod </label>
                    <input class="form-control w-50 text-black"  type="text" name="bamdod" value="{{$data->Bamdod}}" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Quyosh </label>
                    <input class="form-control w-50 text-black"  type="text" name="quyosh" value="{{$data->Quyosh}}" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Peshin </label>
                    <input class="form-control w-50 text-black"  type="text" name="peshin" value="{{$data->Peshin}}"required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label> Asr </label>
                    <input class="form-control w-50 text-black"  type="text" name="asr" value="{{$data->Asr}}" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label>Shom</label>
                    <input class="form-control w-50 text-black"  type="text" name="shom" value="{{$data->Shom}}" required="">
                </div>

                <div class="div" style="padding: 20px;">
                    <label>Xufton</label>
                    <input class="form-control w-50 text-black"  type="text" name="xufton" value="{{$data->Xufton}}" required="">
                </div>

                <div class="div" style="padding: 20px;">

                    <button class="btn btn-primary " type="submit" name="submit"> Yangilash </button>

                </div>

            </form>

        </div>
    </div>
@endsection

