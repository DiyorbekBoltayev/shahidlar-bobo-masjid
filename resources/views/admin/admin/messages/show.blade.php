@extends('admin.master')
@section('content')
    <section class="news-item">

        <div class="news-item__wrapper">
            <div class=" news-item__card card__blur">
                <time class="news-item__time">{{$message->created_at}}</time>
                <h2 class="card__title news-item__card-title">
                    <span>от кого: </span>
                    <span class=""> {{$message->name}}</span>
                    <span class="">{{$message->surname}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>компания: </span>
                    <span class=""> {{$message->company}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>страна: </span>
                    <span class=""> {{$message->country}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>Промышленность: </span>
                    <span class=""> {{$message->industry}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>Телефон: </span>
                    <span class=""> {{$message->phone}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>Электронная почта: </span>
                    <span class=""> {{$message->email}}</span>
                </h2>
                <h2 class="card__title news-item__card-title">
                    <span>любопытство: </span>
                    <span class="">
                        @if($message->bastion==1) Wallix Bastion, @endif
                    </span>
                    <span class="">
                        @if($message->bestsafe==1) Wallix Bestsafe, @endif
                    </span>
                    <span class="">
                        @if($message->trustelem==1) Wallix Trustelem @endif
                    </span>
                </h2>

                <p class="card__text news-item__card-text--top  ">
                    {{$message->text}}
                </p>
                <form action="{{ route('admin.messages.destroy',$message->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="btn-label">
                            удалять </span>        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </div>

        </div>





    </section>
@endsection



