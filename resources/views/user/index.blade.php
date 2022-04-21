@extends('user.master')
@section('content')

    <section class="engine"><a href="https://mobirise.info/j">Ehsonlar</a></section><section class="header1 cid-t2SQd1abIs mbr-fullscreen mbr-parallax-background" id="header1-l">


        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-5">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Masjid uchun ehson qiling.</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">Alloh taolo marhamat qiladi: “...va siz ehson qiling, Alloh taolo ehson qiluvchilarni yaxshi ko‘radi”. Yana bir oyatda: “Yaxshilik qiluvchilarga bu dunyoning o‘zida ham yaxshilik bor”, deyiladi.</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-info display-4" href="{{url('/ehson')}}">Ehson qilish</a></div>
                </div>
                <div class="col-6 col-lg-3"></div>
                @include('user.namoz_vaqti')
            </div>
        </div>
    </section>



    <section class="image2 cid-t2Tpcrw4DS" id="image2-15">


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="maqola_rasm/{{$dat->rasm}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">

                        <div class="text-wrapper">
                            <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                                <strong>{{ $dat->mavzu }}</strong></h3>
                            <p class="mbr-text mbr-fonts-style display-7">
                            {{substr($dat->matn, 0, 400 )}}
                        </div>
                    </div>
                </div>
            </div>



    </section>




    <section class="content3 cid-t2Tkc4k8md" id="content3-x">

        <div class="container-fluid">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Yangiliklar</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Masjidimiz haqida so'ngi yangiliklar</h5>
            </div>
            <div class="row mt-4">

                <?php $t=0; ?>
                @foreach($data as $da)
                    <?php $t++ ?>
                        <div class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="/newsimage/{{$da->rasm}}" alt="" title="">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-4"><em>{{$da->date}}</em></h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{{$da->mavzu}}</strong></h6>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">     {{ substr($da->matn, 0,80) }}...</p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{url('yangiliksingle',$da->id)}}" class="btn item-btn btn-primary-outline display-7" target="_blank">Read More &gt;</a></div>
                            </div>
                        </div>
                    @if($t==3) @break @endif
                @endforeach
            </div>
        </div>
    </section>


    <section class="map1 cid-t34f2JGzn4" id="map1-2n">

        <div class="container">
            <div class="mbr-section-head mb-4">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Map</strong>
                </h3>

            </div>
            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.5360927602087!2d60.657815117443846!3d41.51432690000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfc76b31fe7d2f%3A0x1bb442e91408521c!2sShahidlar%20bobo%20jome%20masjidi!5e0!3m2!1suz!2s!4v1649872772592!5m2!1suz!2s" allowfullscreen=""></iframe></div>
        </div>
    </section>


@endsection
