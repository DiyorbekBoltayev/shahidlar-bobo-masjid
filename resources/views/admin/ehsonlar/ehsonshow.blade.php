@extends('admin.master')
@section('content')

    <a href="{{route('addehson')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i>Ehson qo'shish</a>
        <table class="table table-bordered table-striped border-primary">
            <tr class="">
                <th>T/R</th>
                <th>Qisqa ma'lumot</th>
                <th>Telefon raqami</th>
                <th>Rasm</th>
                <th>Amallar</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->phone}}</td>
                    <td class="p-2"><img style="width: 90%; height: 100%;" src="/imgehson/{{$d->img}}" alt=""></td>
                    <td>
                        <a href="{{route('editehson',$d->id)}}" class="btn btn-outline-warning text  text-black fw-bold">Tahrirlash</a>
                        <a href="{{route('ehsondelete',$d->id)}}" class="btn btn-outline-danger fw-bold">O'chirish</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
