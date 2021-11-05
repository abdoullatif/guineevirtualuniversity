<!DOCTYPE html>
<html dir="ltr" lang="fr">

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
    <link href="{{ asset('app-assets/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- Customise lass prince CSS -->
    <link rel="stylesheet" href="{{ asset('app-assets/dist/css/style-card.css') }}">
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
    <div class="container justify-content-center align-items-center">


        <div style="height: 30px"></div>


        <p class="text-center mb-3"><img class="img-responsive" src="{{ asset('app-assets/assets/images/banner/banner1.png') }}" width = "350px" height = "150px" alt=""></p>
        
        <div style="height: 30px"></div>

        <p class="text-center mb-3">
            <a class="nav-link" href="javascript:void(0)">
                <form>
                    <div class="customize-input">
                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                            type="search" placeholder="Recherche" aria-label="Search">
                                        
                    </div>
                </form>
            </a>
        </p>


        <div>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            
                <!-- Start First Cards -->  
                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a class="hover" href="/login">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2>Universite Mahatma Gandhi</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="#!">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="courses.php">
                            <h2>Universite Koffi Annan</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="#!">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2>Universite Gamal Abdel naser</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>
                    
                
                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a class="hover" href="#!">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2>Universite</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="#!">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2>Universite</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url({{ asset('app-assets/assets/images/cours/cours.png') }});">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="#!">Se Connecter</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2>Universite</h2>
                            <p>description</p>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved &copy;. Designed and Developed by Abdoulatif sooba</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('app-assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
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
    <!-- customise lass prince-->
    
    <!--This page JavaScript -->
    <script src="{{ asset('app-assets/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('app-assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('app-assets/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
</body>

</html>