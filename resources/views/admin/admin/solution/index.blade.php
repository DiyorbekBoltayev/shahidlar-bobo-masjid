@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Решения</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.solution.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить решение
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Титул</th>
                            <th scope="col">Текст</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Шаблон</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($solutions as $solution)
                            <tr>
                                <th scope="row">{{$solution->id}}</th>
                                <td>{{$solution->title}}</td>
                                <td>{{$solution->text}}</td>
                                <td class="text-center">
                                    <img src="{{asset('storage/solutions/'.$solution->img)}}" style="width:30%" alt="">
                                </td>
                                <td>{{$solution->template_id}}</td>
                                <td>
                                    <form action="{{ route('admin.solution.destroy',$solution->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.solution.edit',$solution->id) }}">
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
