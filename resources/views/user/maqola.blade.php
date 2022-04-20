@extends('user.master')
@section('content')



<section class="engine"><a href="#">how to develop own website</a></section><section class="features5 cid-t34g4hC3u6" id="features6-2q">

    <div class="container">
        <div class="row justify-content-center">


                @foreach( $data as $dat )

                    <div class="card col-12 col-lg-6">
                        <div class="card-wrapper mbr-flex">
                            <div class="card-box align-left">

                                <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                    <strong>{{ substr($dat->mavzu, 0, 30 ) }}</strong>
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
