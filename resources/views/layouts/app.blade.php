<!DOCTYPE html>
<html dir="ltr" lang="fr"> <!--  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app-assets/assets/images/favicon.png') }}">
    <title>Guinée Virtual University</title>
    <!-- Custom CSS {{ asset('app-assets/') }} -->
    <link href="{{ asset('app-assets/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    @yield ('extend-header')
    <!-- Custom CSS -->
    <link href="{{ asset('app-assets/dist/css/style.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    @yield ('bottom_style_extend_header')
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        @include('layouts.includes.header')

        @include('layouts.includes.sidebar')
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        @yield ('content')
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper {{ asset('app-assets/') }}-->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('app-assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!--<script src="{{ asset('app-assets/dist/js/ajax/jquery.min.js') }}"></script>-->
    <script src="{{ asset('app-assets/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('app-assets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('app-assets/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('app-assets/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('app-assets/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('app-assets/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
    <!-- customise lass prince-->
    @yield ('extend-footer')


</body>

</html>