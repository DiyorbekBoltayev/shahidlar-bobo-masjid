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


        <table class="table table-bordered border-primary ">
            <tr>
                <th>ID</th>
                <th id="th">Nomi</th>
                <th id="th">avtor</th>
                <th id="th">file</th>
                <th>Rasm</th>
                <th>Actions</th>

            </tr>

            @foreach($dat as $d)

                <tr>
                    <td>{{$d->id}}</td>
                    <td id="td">{{$d->nomi}}</td>

                    <td id="td">{{$d->avtor}}</td>

                    <td><a class="" href="/bookiimage/{{$d->file}}" download="{{$d->file}}"> Yuklab olish </a></td>

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

