@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Обновлять Офис</h1></div>
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


                    <form action="{{route('admin.office.update',$office)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">страна (Ру)</label>
                            <input type="text" value="{{$office->country}}" name="country" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">адресс (Ру)</label>
                            <input type="text" name="adress" value="{{$office->adress}}" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">phone (Ру)</label>
                            <input type="text" value="{{$office->phone}}" name="phone" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">email (Ру)</label>
                            <input type="text" value="{{$office->email}}" name="email" class="form-control" id="header_ru" placeholder="Титул">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
