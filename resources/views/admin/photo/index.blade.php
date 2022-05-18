@extends('admin.master')
@section('content')

    @if(session()->has('xabar'))
        <div id="yashirish" class="alert alert-success flex justify-between" onclick="yashir()">

            {{session()->get('message')}}
            <button type="button" class="close " data-dismiss="alert" data-target="alert"></button>

        </div>
    @endif

    <style>
        #td{
            white-space:normal !important
        }
        #th{
            white-space:normal !important
        }
    </style>

    <div class=" container ">
        <h1 class="text text-center"> Barcha rasmlar</h1>

        <a href="{{url('photocreate')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i> Rasm qo'shish</a>

        <table class="table table-bordered border-primary ">
            <tr>
                <th>#</th>
                <th id="th">Name</th>
                <th> Rasm </th>
                <th>Harakatlar</th>

            </tr>
            @foreach($data as $d)

                <tr>
                    <td>{{$d->id}}</td>
                    <td id="td">{{$d->name}}</td>
                    <td>
                        <img style="width: 100px; height: 100px;" src="photo/{{$d->photo}}" alt="">
                    </td>
                    <td>
                        <a href="{{url('photoedit',$d->id)}}"> <button class="btn btn-warning">Tahrirlash</button></a>

                        <a href="{{url('photodelete',$d->id)}}"> <button class="btn btn-danger">O'chirish</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="row justify-content-center">


            @if ($data->links())
                <div class="mt-4 p-4 box has-text-centered">
                    {{ $data->links() }}
                </div>
            @endif


        </div>
    </div>





@endsection
