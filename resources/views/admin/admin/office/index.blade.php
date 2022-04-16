@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Офисы</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.office.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить офис
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Страна</th>
                            <th scope="col">Адрес</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Электронная почта</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($office as $offices)
                            <tr>
                                <th scope="row" class="col-1">{{$offices->id}}</th>
                                <td>{{$offices->country}}</td>
                                <td>{{$offices->adress}}</td>
                                <td>{{$offices->phone}}</td>
                                <td>{{$offices->email}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.office.destroy',$offices->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.office.edit',$offices->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
