@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h1 class="card-title">@if($solution->id){{'Обновлять решение'}}@else{{'Добавить решение'}}@endif</h1>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ой!</strong>С вашим вводом возникли некоторые проблемы.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{$action}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    @if($solution->id)
                        @method('PUT')
                    @endif
                        <div class="form-group">
                            <label for="title">Титул(Ру)</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Титул" value="{{$solution->title}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">Текст (Ру)</label>
                            <textarea  class="form-control"  name="text" id="description_ru" rows="10">{{$solution->text}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <div class="form-group">
                            <label for="category">Выберите категория</label>
                            <select class="form-control" name="template_id" required>
                                <option value="">Выберите объект в списке</option>
                                <option value="1" @if($solution->template_id == 1){{'selected'}}@endif>Шаблон 1</option>
                                <option value="2" @if($solution->template_id == 2){{'selected'}}@endif>Шаблон 2</option>
                                <option value="3" @if($solution->template_id == 3){{'selected'}}@endif>Шаблон 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
