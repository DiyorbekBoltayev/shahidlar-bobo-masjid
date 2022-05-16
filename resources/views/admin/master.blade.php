<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Admin panel</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{asset('/asset/img/icon.ico')}}" type="image/x-icon"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="{{asset('/asset/js/core/jquery.3.2.1.min.js')}}"></script>
    <!-- Fonts and icons -->
    <script src="{{asset('/asset/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{asset("/asset/css/fonts.min.css")}}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/atlantis.min.css')}}">

    @yield('link')

</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="{{route('admin')}}" class="logo">
                <p class="navbar-brand" style="color: white">Admin panel</p>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
{{--    @include('admin.nav')--}}
    <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
@include('admin.sidebar')
<!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">

            <div class="page-inner py-5">
{{--                @include('alerts')--}}
                <div class="col-md-12">
                    <div class="card">


                            <div class="card-body">
                @yield('content')
                            </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>


</div>
<!--   Core JS Files   -->

<script src="{{asset('/asset/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('/asset/js/core/popper.min.js')}}"></script>
<script src="{{asset('/asset/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('/asset/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('/asset/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('/asset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


<!-- Chart JS -->
<script src="{{asset('/asset/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('/asset/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('/asset/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('/asset/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('/asset/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('/asset/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/asset/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('/asset/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{asset('/asset/js/atlantis.min.js')}}"></script>

<script>
    function yashir(){
        document.getElementById("yashirish").style.visibility = 'hidden';
    }
</script>

@yield('script')
</body>
</html>
