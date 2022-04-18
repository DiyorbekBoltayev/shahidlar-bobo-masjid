@extends('user.master')
@section('content')



<section class="engine"><a href="#">how to develop own website</a></section><section class="features5 cid-t34g4hC3u6" id="features6-2q">

    <div class="container">
        <div class="row justify-content-center">


                <?php $t=0; ?>

                @foreach( $data as $dat )
                    <?php $t++; ?>

                    <div class="card col-12 col-lg-6">
                        <div class="card-wrapper mbr-flex">
                            <div class="card-box align-left">

                                <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                    <strong>{{$dat->mavzu}}</strong>
                                </h5>
                                <p class="mbr-text mbr-fonts-style mb-3 display-4">{{ substr($dat->matn, 0,40) }}... </p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-4"> Autor: {{ $dat->autor }} </p>
                                <div class="mbr-section-btn"><a href="{{url('maqolasingle',$dat->id)}}" class="btn btn-primary display-4">Ko`rish</a></div>
                            </div>
                            <div class="img-wrapper align-center">
                                <img style="width: 200px; height: 200px;" src="/maqola_rasm/{{$dat->rasm}}" alt="Bu rasm">
                            </div>
                        </div>
                    </div>

                    @if($t==4) @break @endif
                @endforeach

        </div>
    </div>

</section>



<section class="content12 cid-t34gh8nW7r" id="content12-2s">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-primary display-4" href="">Previous</a>
                    <a class="btn btn-primary display-4" href="">Next</a>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection
