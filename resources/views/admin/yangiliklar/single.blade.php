@extends('user.master')
@section('content')


<section class="engine"><a href="https://mobirise.info/s">bootstrap themes</a></section>
<section class="content4 cid-t2UlTvyx8P" id="content4-29">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>{{$data->mavzu}}</strong>
                </h3>


            </div>
        </div>
    </div>
</section>

<section class="image3 cid-t2UlXuaXdu" id="image3-2b">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="/newsimage/{{$data->rasm}}" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        Rasmni vohti chiqodi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content5 cid-t2Um0CTqjG" id="content5-2c">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
                    {{$data->mavzu}}
                </h4>
                <p class="mbr-text mbr-fonts-style display-7">
                {{$data->matn}}
                     </div>
        </div>
    </div>
</section>



<section class="gallery5 mbr-gallery cid-t2UmeiYCnV" id="gallery5-2g">
    <div class="container">

        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Boshqa yangiliklar</strong></h3>
        </div>

        <div class="row mbr-gallery mt-4">
            <?php $f=0 ?>
            @foreach($dat as $d)
                @if($d->id!=$data->id)
                    <?php $f+=1 ?>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#t34lQ6dwxc-modal">
                    <img class="w-100" src="/newsimage/{{$d->rasm}}" alt="" data-slide-to="0" data-target="#lb-t34lQ6dwxc">

                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    {{ substr($d->mavzu, 0,15) }}... <a href="{{url('yangiliksingle',$d->id)}}" class="text-primary">Batafsil</a>
                </h6>

            </div>
                        @if($f==4)@break
                        @endif
                    @endif
                @endforeach
        </div>


    </div>

</section>






@endsection


