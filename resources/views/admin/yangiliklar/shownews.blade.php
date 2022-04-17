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
                <th id="th">Mavzu</th>
                <th>Rasm</th>
                <th>Actions</th>

            </tr>
            @foreach($data as $d)

                <tr>
                    <td>{{$d->id}}</td>
                    <td id="td">{{$d->mavzu}}</td>
                    <td>

                        <img style="width: 100px; height: 100px;" src="/newsimage/{{$d->rasm}}" alt="">
                    </td>
                    <td>
                        <a href="{{url('edit',$d->id)}}"> <button class="btn btn-warning">Tahrirlash</button></a>
                        <a href="{{url('delete',$d->id)}}"> <button class="btn btn-danger">O'chirish</button></a>

                   </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>

@endsection
