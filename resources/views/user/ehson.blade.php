@extends('user.master')
@section('content')

<section class="content6 cid-t2U8rTt4AM" id="content6-1f">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-3 display-4">
                    <em> Hadisi qudsiyda Alloh taolo: <b>“Ey odam bolasi, ehson qil! Shunda Men ham senga ehson qilaman”</b>, – deb marhamat qilgan. </em>
                   <br>
                    <b>Masjid uchun ehson qilish:</b>
                </p>
                <div class="col-md-12 col-lg-12 d-flex justify-content-center mb-4 mt-4 align-items-center" >
                    <a  href="https://indoor.click.uz/pay?id=019924&t=0" class=" btn display-4" style="  background: #02f4a0; margin-left: 5%; margin-right: 5%; padding: 10px;">
                        <img style="width: 170px; height: 60px;"src="https://docs.click.uz/wp-content/themes/click_help/assets/images/logo.png" src="https://camo.githubusercontent.com/c97f81e877cebd758ea17c0e3c270f955490cd3114c8d01d453d10826309181a/68747470733a2f2f63646e2e706179636f6d2e757a2f646f63756d656e746174696f6e5f6173736574732f7061796d655f30312e706e67" alt="payme orqali">

                    </a>
                    <a href="https://payme.uz/fallback/merchant/?id=61fa825bb0159dc2d9e439dd" class="btn  display-4" style="background: #02f4a0; margin-left: 5%; margin-right: 5%; padding: 16px;">
                        <img style="width: 170px; height: 50px;" src="https://camo.githubusercontent.com/c97f81e877cebd758ea17c0e3c270f955490cd3114c8d01d453d10826309181a/68747470733a2f2f63646e2e706179636f6d2e757a2f646f63756d656e746174696f6e5f6173736574732f7061796d655f30312e706e67" alt="click orqali">
                    </a>
                </div>
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
                                    <h3 class="text">To'lov qilish</h3>

                                    <div class="mbr-section-btn " ><a href="https://indoor.click.uz/pay?id=019924&t=0" class="btn  display-4" style="background: #5cc8ef">
                                            <img style="width: 100px; height: 30px;"src="https://docs.click.uz/wp-content/themes/click_help/assets/images/logo.png" src="https://camo.githubusercontent.com/c97f81e877cebd758ea17c0e3c270f955490cd3114c8d01d453d10826309181a/68747470733a2f2f63646e2e706179636f6d2e757a2f646f63756d656e746174696f6e5f6173736574732f7061796d655f30312e706e67" alt="payme orqali">

                                        </a></div>
                                    <div class="mbr-section-btn "><a href="https://payme.uz/fallback/merchant/?id=61fa825bb0159dc2d9e439dd" class="btn  display-4" style="background: #5cc8ef">
                                            <img style="width: 100px; height: 30px;" src="https://camo.githubusercontent.com/c97f81e877cebd758ea17c0e3c270f955490cd3114c8d01d453d10826309181a/68747470733a2f2f63646e2e706179636f6d2e757a2f646f63756d656e746174696f6e5f6173736574732f7061796d655f30312e706e67" alt="click orqali">
                                        </a></div>
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
