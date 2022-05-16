@extends('user.master')
@section('style')

@endsection

@section('content')
    <div class="container page-top mt-5 d-flex justify-content-center align-items-center">

        <div class="row">

            @foreach($data as $dat )
                <div class="col-md-6 col-sm-12 mb-4">
                    <iframe width="560" height="315" src="{{$dat->url}}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            @endforeach


        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">

                    <section class="content12 cid-t34gh8nW7r" id="content12-2s">
                        <div class="container">
                            <div class="row justify-content-center">
                                @if ($data->links())
                                    <div class="mt-4 p-4 box has-text-centered">
                                        {{ $data->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
