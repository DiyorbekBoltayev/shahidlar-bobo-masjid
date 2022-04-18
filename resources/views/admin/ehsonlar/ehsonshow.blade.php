@extends('admin.master')
@section('content')
    <h1 class="text text-primary">Bu yerda ehsonlar chiqadi</h1>
    <div class="container " >
        <table class="table table-striped  table-bordered-bd-success">
            <tr class="table-primary">
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
                        <a href="" class="btn btn-outline-warning text-black fw-bold">Tahrirlash</a>
                        <a href="" class="btn btn-outline-danger fw-bold">O'chirish</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
