@extends('user.master')
@section('content')


    <section class="engine"><a href="https://mobirise.info/d">site maker</a></section>
<?php $b=0 ?>
  @foreach($data as $key=>$da)
      <?php $b+=1 ?>
  @if($key%2 == 0)
    <section class="features15 cid-t2UjhZRBWo" id="features16-21">
        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-2">
                                <strong>{{$da->mavzu}}</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                {{ substr($da->matn, 0,80) }}...</p>
                            <div class="mbr-section-btn mt-3"><a class="btn btn-warning display-4" href="{{url('yangiliksingle',$da->id)}}"><span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Learn more</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img style="width: 300px; height: 300px; " src="/newsimage/{{$da->rasm}}" alt="Mobirise">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @else
    <section class="features16 cid-t2UjfDML13" id="features17-20">
        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img  style="width: 300px; height: 300px; " src="/newsimage/{{$da->rasm}}" alt="Mobirise">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-5">
                                <strong>{{$da->mavzu}}</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                {{ substr($da->matn, 0,80) }}...
                            </p>
                                <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="{{url('yangiliksingle',$da->id)}}"><span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                                    Learn more
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif
      @if($b == 6) @break
      @endif
  @endforeach

    <section class="content12 cid-t2UlfVCI5g" id="content12-26">

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
