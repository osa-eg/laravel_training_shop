<!DOCTYPE html>

<html @if (app()->getLocale() === 'ar') lang="ar" dir="rtl" @else lang="en" @endif>
@php($cssPath = app()->getLocale() === 'ar' ? 'css-rtl' : 'css')

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Admin - @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="{{ asset('admin/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!--  Custom Scroll bar-->
    <link href="{{ asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/$cssPath/sidemenu.css") }}">

    <!-- Maps css -->
    <link href="{{ asset('admin/assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset("admin/assets/$cssPath/style.css") }}" rel="stylesheet">
    <link href="{{ asset("admin/assets/$cssPath/style-dark.css") }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset("admin/assets/$cssPath/skin-modes.css") }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        @include('components.admin.sidebar')
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header -->
            @include('components.admin.header')
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">
                @include('components.admin.alerts')
                @yield('content')
            </div>
        </div>
        <!-- /main-content -->


        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>Copyright © 2020 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--Internal  Chart.bundle js -->
    <script src="{{ asset('admin/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('admin/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal  Flot js-->
    <script src="{{ asset('admin/assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- Custom Scroll bar Js-->
    <script src="{{ asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!--Internal Apexchart js-->
    {{-- <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script> --}}

    <!-- Rating js-->
    <script src="{{ asset('admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('admin/assets/js/eva-icons.min.js') }}"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>
    <script src="{{ asset('admin/assets/js/modal-popup.js') }}"></script>

    <!-- Left-menu js-->
    <script src="{{ asset('admin/assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Internal Map -->
    <script src="{{ asset('admin/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('admin/assets/js/index.js') }}"></script>

    {{-- <!-- Apexchart js-->
    <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script> --}}

    <!-- custom js -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.vmap.sampledata.js') }}"></script>

    @stack('scripts')
</body>

</html>
