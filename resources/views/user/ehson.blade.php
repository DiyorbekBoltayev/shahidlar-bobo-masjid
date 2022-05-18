@extends('user.master')
@section('content')

<section class="content6 cid-t2U8rTt4AM" id="content6-1f">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-3 display-4">
                    <em> Hadisi qudsiyda Alloh taolo: <b>“Ey odam bolasi, ehson qil! Shunda Men ham senga ehson qilaman”</b>, – deb marhamat qilgan.</em>
                </p>
                <hr class="line">
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-t2U7XlAKJ3" xmlns="http://www.w3.org/1999/html" id="features9-1c">





    <div class="container pt-4">
        @foreach($data as $index=>$d)
        <div class="card p-3">
            <div class="card-wrapper p-3">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img style="width: 200px; height: 200px;" src="/imgehson/{{$d->img}}" alt="rasm">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-5">
                                        <strong>{{$d->title}}</strong>
                                    </h6>
                                    <p class="mbr-text mbr-fonts-style display-15">
                                        {{substr($d->text,0,300)}}...

                                    </p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="price mbr-fonts-style display-4">Zarur:<br>{{$d->summa}} so'm</p>
                                    <div class="mbr-section-btn"><a href="{{route('ehsonsingle',$d->id)}}" class="btn btn-primary display-4">Ehson qilish</a></div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            @endforeach
    </div>


</section>



<section class="content12 cid-t2U9Cq2lRa" id="content12-1i">

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
