@extends('user.master')
@section('content')


<section class="engine"><a href="#">Masjid</a></section><section class="content6 cid-t34gYhZK46" id="content6-2w">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-4 display-5">
                    <em>{{$data->mavzu}}</em>
                </p>
                <hr class="line">
            </div>
        </div>
    </div>

</section>

<section class="image3 cid-t34h6VTfI1" id="image3-2y">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="image-wrapper">
                    <img style="width: 100%; margin: auto; height: 600px; " src="/maqola_rasm/{{$data->rasm}}" alt="Bu rasm">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">Autor: {{$data->autor}}</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="content15 cid-t34h2i9ioH" id="content15-2x">

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-11">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mbr-white mb-3 display-5">
                            <strong>{{$data->mavzu}}</strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">{{$data->matn}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="gallery3 cid-t34h9MYZrg" id="gallery3-2z">

    <div class="container-fluid">
        <div class="mbr-section-head">
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Boshqa maqolalar </h5>
        </div>

        <div class="row mt-4">
            <?php $t=0; ?>

            @foreach( $dat as $dat )
                @if( $data->id != $dat->id )
                    <?php $t++; ?>

                        <div class="item features-image сol-12 col-md-6 col-lg-3">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img style="height: 300px; width: 100%;" src="/maqola_rasm/{{$dat->rasm}}" alt="bu rasm">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-7">
                                        <strong>{{$dat->mavzu}}</strong>
                                    </h5>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                        {{ substr($dat->matn, 0,40) }}...
                                        <a href="{{url('maqolasingle',$dat->id)}}" class="text-primary">Ba'tavsil..</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    @if($t==4) @break @endif
                @endif
            @endforeach

        </div>
    </div>

</section>


@endsection
