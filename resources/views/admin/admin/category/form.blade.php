@extends('admin.master')
@section('link')
    <link href="{{'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css'}}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h1 class="card-title">@if($model->id){{'Обновлять категория'}}@else{{'Добавить категория'}}@endif</h1>
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
                        @if($model->id)
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="title">Титул</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Титул" value="{{$model->title}}">
                        </div>

                        <div class="form-group">
                            <label for="text">Текст</label>
                            <textarea id="text" class="form-control" name="text"
                                      rows="100">{{$model->text ?? "<p>Стандартная заголовка</p><ul><li><span>Стандартный текст&nbsp;</span></li><li>Стандартный текст&nbsp;</li><li>Стандартный текст</li></ul><p><br></p>"}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js'}}"></script>
    <script>
        $('#text').summernote({
            height: 200
        });
    </script>
@endsection
