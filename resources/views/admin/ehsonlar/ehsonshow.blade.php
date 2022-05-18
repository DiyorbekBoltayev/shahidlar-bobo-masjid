@extends('admin.master')
@section('content')

    <a href="{{route('addehson')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i> Ehson qo'shish</a>
    <table class="table table-bordered border-primary ">
        <tr>
            <th>T/R</th>
            <th>Qisqa ma'lumot</th>
            <th>Rasm</th>
            <th>Amallar</th>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->title}}</td>
                <td class="p-2"><img style="width: 90%; height: 100%;" src="/imgehson/{{$d->img}}" alt=""></td>
                <td>
                    <a href="{{route('editehson',$d->id)}}" class="btn btn-warning">Tahrirlash</a>
                    <a href="{{route('ehsondelete',$d->id)}}" class="btn btn-danger">O'chirish</a></td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection
