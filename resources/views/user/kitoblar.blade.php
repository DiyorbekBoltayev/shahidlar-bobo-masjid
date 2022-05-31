@extends('user.master')
@section('content')


<section class="gallery3 cid-t34eNDZm1O" id="gallery3-2k">


        <div class="container-fluid">

            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong> Bizdagi barcha kitoblar </strong></h4>

            </div>



            <div class="row mt-4">
                        @foreach( $data as $dat )
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                            <div class="item-img">
                                <img  style=" height: 300px; width: 300px; " src="/newsimage/{{$dat->rasm}}">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>  {{substr($dat->nomi, 0, 25 )}} </strong>
                                </h5>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    {{$dat->avtor}}
                                </p>
                                <a href="{{route('yukla',$dat->id)}}" class="btn btn-primary">Yuklab olish.</a>
                            </div>
                    </div>
                </div>
                        @endforeach

            </div>
        </div>
    </section>



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


@endsection
