@extends('admin.master')
@section('content')

    <style>
        #td{
            white-space:normal !important
        }
        #th{
            white-space:normal !important
        }
    </style>
    <div class=" container ">

        <a href="{{url('addbook')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i>Kitob qo'shish</a>
        <table class="table table-bordered border-primary ">
            <tr>
                <th>ID</th>
                <th id="th">Nomi</th>
                <th id="th">avtor</th>
                <th id="th">file</th>
                <th>Rasm</th>
                <th>Actions</th>

            </tr>

            @foreach($dat as $k=>$d)

                <tr>
                    <td>{{$k}}</td>
                    <td id="td">{{$d->nomi}}</td>

                    <td id="td">{{$d->avtor}}</td>

                    <td><a class="" href="{{route('yukla',$d->id)}}" > Yuklab olish </a></td>

                    <td>
                        <img style="width: 100px; height: 100px;" src="/newsimage/{{$d->rasm}}" alt="">
                    </td>

                    <td>
                        <a href="{{url('editbook',$d->id)}}"> <button class="btn btn-warning">Tahrirlash</button></a>
                        <a href="{{url('deletebook',$d->id)}}"> <button class="btn btn-danger">O'chirish</button></a>

                    </td>
                </tr>

            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>

@endsection

