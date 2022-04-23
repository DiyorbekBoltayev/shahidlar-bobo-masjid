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
                <th id="th">ID</th>
                <th id="th">Bamdod</th>
                <th id="th">Quyosh</th>
                <th id="th">Peshin</th>
                <th id="th">Asr</th>
                <th id="th">Shom</th>
                <th id="th">Xufton</th>
                <th id="th">Action</th>

            </tr>

@foreach($data as $da)
                <tr>
                    <td>{{$da->id}}</td>
                    <td id="td">{{$da->Bamdod}}</td>
                    <td id="td">{{$da->Quyosh}}</td>
                    <td id="td">{{$da->Peshin}}</td>
                    <td id="td">{{$da->Asr}}</td>
                    <td id="td">{{$da->Shom}}</td>
                    <td id="td">{{$da->Xufton}}</td>

                    <td>
                        <a href="{{url('editnamoz',$da->id)}}"> <button class="btn btn-warning">Tahrirlash</button></a>


                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>


@endsection
