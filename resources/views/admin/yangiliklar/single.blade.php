@extends('user.master')
@section('content')

    <section class="features16 cid-t2UjfDML197 p-5" id="features17-513">

        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="/newsimage/{{$data->rasm}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-5">
                                <strong>{{$data->mavzu}}</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                {{$data->matn}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
