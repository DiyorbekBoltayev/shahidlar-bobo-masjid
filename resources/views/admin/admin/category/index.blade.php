@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Категория</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.category.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить категория
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
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->text}}</td>
                                <td>
                                    <img src="{{asset('/storage/categories/' . $category->img)}}" style="width: 30%" alt="">
                                </td>
                                <td>
                                    <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.category.edit',$category->id) }}">
                                        <i class="fa fa-pen"></i>
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
