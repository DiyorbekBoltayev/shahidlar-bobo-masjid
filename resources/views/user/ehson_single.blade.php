@extends('user.master')
@section('content')
    <section class="header12 cid-t3szbLyPVc m-3" id="header12-3a">




        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-12 col-md-12 col-lg-9">
                    <div class="card-wrapper">
                        <div class="card-box align-center mt-4">
                            <h2 class="card-title mbr-fonts-style mb-3 display-2">
                                <strong>{{$data->title}}</strong></h2>
                            <p class="mbr-text mbr-fonts-style display-7">{{$data->text}}.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content13 cid-t3szyH6V9N" id="content13-3c">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong>Ma'lumotlar</strong>
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6">
                            <ul class="list mbr-fonts-style display-7">
                                <li><strong>Telefon raqami</strong><br>{{$data->phone}}</li>
                                <li><strong>Manzili</strong><br>{{$data->address}}</li>
                                <li><strong>Kerakli pul miqdori</strong><br>{{$data->summa}} so'm</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="list mbr-fonts-style display-7">
                                <li><strong>Asosiy karta raqami
                                    </strong><br>{{$data->cart_num1}}</li>
                                <li><strong>Qo'shimcha karta raqami<br></strong>{{$data->cart_num2}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>@endsection
