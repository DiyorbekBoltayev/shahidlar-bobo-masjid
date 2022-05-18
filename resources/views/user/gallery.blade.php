@extends('user.master')
@section('style')
    <style>


        #demo {
            height:100%;
            position:relative;
            overflow:hidden;
        }


        .green{
            background-color:#6fb936;
        }
        .thumb{
            margin-bottom: 30px;
        }

        .page-top{
            margin-top:85px;
        }


        img.zoom {
            width: 100%;
            height: 200px;
            border-radius:5px;
            object-fit:cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }


        .transition {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
        .modal-header {

            border-bottom: none;
        }
        .modal-title {
            color:#000;
        }
        .modal-footer{
            display:none;
        }

    </style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@endsection
@section('content')
    <div class="container">
        <div class="container page-top">



            <div class="row">

                @foreach($data as $dat)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="/photo/{{$dat->photo}}" class="fancybox" rel="ligthbox">
                        <img  src="/photo/{{$dat->photo}}" class="zoom img-fluid "  alt="">
                    </a>
                </div>
                @endforeach

            </div>

            <div class="container">
                <div class="row justify-content-center">


                    @if ($data->links())
                        <div class="mt-4 p-4 box has-text-centered">
                            {{ $data->links() }}
                        </div>
                    @endif


                </div>
            </div>


        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function(){

                $(this).addClass('transition');
            }, function(){

                $(this).removeClass('transition');
            });
        });
    </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



@endsection
