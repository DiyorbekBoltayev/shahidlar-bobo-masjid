@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить Офис</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.office.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">страна</label>
                            <input type="text" name="country" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">адресс </label>
                            <input type="text" name="adress" class="form-control" id="header_ru" placeholder="адрес">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">phone </label>
                            <input type="text" name="phone" class="form-control" id="header_ru" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Электронная почта</label>
                            <input type="text" name="email" class="form-control" id="header_ru" placeholder="email">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
