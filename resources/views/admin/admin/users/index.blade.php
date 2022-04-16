@extends('admin.master')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Пользователь</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.users.edit',[1])}}">
                            <span class="btn-label">
                                <i class="fa fa-pen"></i>
                            </span>
                            Изменить
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <h4>Имя: {{$user->name}}</h4>
                    <h4>Email: {{$user->email}}</h4>
                </div>
            </div>
        </div>
    </div>


@endsection
