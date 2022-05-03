@extends('layouts.app')



@section('bottom_style_extend_header')

<!-- Customise lass prince CSS {{ asset('app-assets/') }}-->
<link rel="stylesheet" href="{{ asset('app-assets/dist/css/course.css') }}">
<link rel="stylesheet" href="{{ asset('app-assets/dist/css/course_responsive.css') }}">
<!-- Customise lass prince CSS -->
<link rel="stylesheet" href="{{ asset('app-assets/dist/css/style-card.css') }}">

@endsection



@section('content')


<!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"> Mon cours</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Cours</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Video</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Avril 20</option>
                                <option value="1">Mai 19</option>
                                <option value="2">Juin 19</option>
                            </select>
                        </div>
                    </div>
                </div>      
            </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- video playerssssssss start ////////////////-->
                <!-- ============================
                    
                <div class="embed-responsive embed-responsive-21by9">
                  <iframe class="embed-responsive-item" src="assets/images/1.mp4"></iframe>
                </div>

                ================================== -->
                
                <video width="100%" controls>
                    <source src="{{ asset('uploads/cours/'.$cours->contenue.'') }}" type="video/mp4" />
                </video>
                
                <!-- ============================================================== -->
                <!-- video players end//////////////////////////////// -->
                <!-- ============================================================== -->
                <!--DESCRIPTIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN///////////////////////////////////-->
                
            </div>  
            
            <div class="container-fluid">
                
                
                
                
                <div class="course">
                    <div class="course_top"></div>
                    <div class="container">
                        <div class="row row-lg-eq-height">

                            <!-- Panels -->
                            <div class="col-lg-9">
                                <div class="tab_panels">

                                    <!-- Tabs -->
                                    <div class="course_tabs_container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                                        <div class="tab active">Description</div>
                                                        <div class="tab">Notation</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>		
                                    </div>

                                    <!-- Description -->
                                    <div class="tab_panel description active">
                                        
                                        <div class="panel_title">Programme</div>
                                        <!--
                                        <div class="panel_text">
                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus. Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut, tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque sed dolor sed dui congue tempus a et felis.</p>
                                        </div>
                                        -->
                                        <!--=======================PROGRAMME=======================================-->
                                        <div class="curriculum_items">
                                            <div class="cur_item">
                                                <div class="cur_item_content">
                                                    <div class="cur_item_title">Description</div>
                                                    <div class="cur_item_text">
                                                        <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum.</p>
                                                    </div>
                                                    <!--
                                                    <div class="cur_contents">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-folder" aria-hidden="true"></i><span>1 video, 1 audio, 1 reading</span>
                                                                <ul>
                                                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                                                        <i class="fa fa-video-camera" aria-hidden="true"></i><span>Video: <a href="#">Greetings and Introductions</a></span>
                                                                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                                                                    </li>
                                                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                                                        <i class="fa fa-file" aria-hidden="true"></i><span>Reading: <a href="#">Word Types</a></span>
                                                                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                                                                    </li>
                                                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                                                        <i class="fa fa-volume-up" aria-hidden="true"></i><span>Audio: <a href="#">Listening Exercise</a></span>
                                                                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Graded: Cumulative Language Quiz</span>
                                                                <div class="cur_time ml-auto"><span>3 Questions</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--============================END=======================================-->
                                        <!-- Instructors -->
                                        <div class="instructors">
                                            <div class="panel_title">Professeur</div>
                                            <div class="row instructors_row">

                                                <!-- Instructor -->
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="instructor d-flex flex-row align-items-center justify-content-start">
                                                        <div class="instructor_image"><div><img src="images/instructor_4.jpg" alt=""></div></div>
                                                        <div class="instructor_content">
                                                            <div class="instructor_name"><a href="instructors.php">Abdoulatif S. sooba</a></div>
                                                            <div class="instructor_title">Professeur</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- FAQs 
                                        <div class="faqs">
                                            <div class="panel_title">Question</div>
                                            <div class="accordions">

                                                <div class="elements_accordions">

                                                    <div class="accordion_container">
                                                        <div class="accordion d-flex flex-row align-items-center active"><div>Can I just enroll in a single course? I'm not interested in the entire Specializat</div></div>
                                                        <div class="accordion_panel">
                                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion_container">
                                                        <div class="accordion d-flex flex-row align-items-center"><div>What is the refund policy?</div></div>
                                                        <div class="accordion_panel">
                                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion_container">
                                                        <div class="accordion d-flex flex-row align-items-center"><div>What background knowledge is necessary</div></div>
                                                        <div class="accordion_panel">
                                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                                        </div>
                                                    </div>

                                                    <div class="accordion_container">
                                                        <div class="accordion d-flex flex-row align-items-center"><div>Do i need to take the courses in a specific ord</div></div>
                                                        <div class="accordion_panel">
                                                            <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <!-- Reviews -->
                                    <div class="tab_panel reviews">
                                        <div class="panel_title">Notation</div>
                                        <div class="panel_text">
                                            <p></p>
                                        </div>
                                        <div class="cur_ratings_container clearfix">
                                            <div class="cur_rating d-flex flex-column align-items-center justify-content-center">
                                                <div class="cur_rating_num">4,5</div>
                                                <div class="rating_r rating_r_4 cur_stars"><i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="cur_rating_text">Rated 5 out of 3 Ratings</div>
                                            </div>
                                            <div class="cur_rating_progress d-flex flex-column align-items-center justify-content-center">
                                                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                                    <span>5 stars</span>
                                                    <div id="cur_pbar_1" class="cur_pbar" data-perc="0.80"></div>
                                                </div>
                                                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                                    <span>5 stars</span>
                                                    <div id="cur_pbar_2" class="cur_pbar" data-perc="0.20"></div>
                                                </div>
                                                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                                    <span>5 stars</span>
                                                    <div id="cur_pbar_3" class="cur_pbar" data-perc="0.0"></div>
                                                </div>
                                                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                                    <span>5 stars</span>
                                                    <div id="cur_pbar_4" class="cur_pbar" data-perc="0.0"></div>
                                                </div>
                                                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                                                    <span>5 stars</span>
                                                    <div id="cur_pbar_5" class="cur_pbar" data-perc="0.0"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cur_reviews">

                                            <!-- Review -->
                                            <div class="review">
                                                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="review_title d-flex flex-row align-items-center justify-content-center">
                                                        <div class="review_author_image"><div><img src="images/review_1.jpg" alt=""></div></div>
                                                        <div class="review_author">
                                                            <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                            <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                                        </div>
                                                    </div>
                                                    <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                </div>
                                                <div class="review_text">
                                                    <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
                                                </div>
                                            </div>

                                            <!-- Review 
                                            <div class="review">
                                                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="review_title d-flex flex-row align-items-center justify-content-center">
                                                        <div class="review_author_image"><div><i class="fa fa-user" aria-hidden="true"></i></div></div>
                                                        <div class="review_author">
                                                            <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                            <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                                        </div>
                                                    </div>
                                                    <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                </div>
                                                <div class="review_text">
                                                    <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
                                                </div>
                                            </div>
                                            -->

                                            <!-- Review 
                                            <div class="review">
                                                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="review_title d-flex flex-row align-items-center justify-content-center">
                                                        <div class="review_author_image"><div><i class="fa fa-user" aria-hidden="true"></i></div></div>
                                                        <div class="review_author">
                                                            <div class="review_author_name"><a href="#">Sarah Parker</a></div>
                                                            <div class="review_date">Sep 29, 2017 at 9:48 am</div>
                                                        </div>
                                                    </div>
                                                    <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                </div>
                                                <div class="review_text">
                                                    <p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
                                                </div>
                                            </div>
                                            -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar -->
                            <div class="col-lg-3">
                                <div class="sidebar">
                                    <div class="sidebar_background"></div>
                                    <div class="sidebar_top"><a href="#"></a></div>
                                    <div class="sidebar_content">

                                        <!-- Features -->
                                        <div class="sidebar_section features">
                                            <div class="sidebar_title">Cours</div>
                                            <div class="features_content">
                                                <ul class="features_list">

                                                    <!-- Feature -->
                                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                                        <div class="feature_title"><i class="fa fa-clock" aria-hidden="true"></i><span>Duree</span></div>
                                                        <div class="feature_text ml-auto">50 heures</div>
                                                    </li>

                                                    <!-- Feature -->
                                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                                        <div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Etudiant</span></div>
                                                        <div class="feature_text ml-auto">100</div>
                                                    </li>

                                                    <!-- Feature 
                                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                                        <div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Quizzes</span></div>
                                                        <div class="feature_text ml-auto">3</div>
                                                    </li>-->

                                                    <!-- Feature -->
                                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                                        <div class="feature_title"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Ont Aime</span></div>
                                                        <div class="feature_text ml-auto">60</div>
                                                    </li>

                                                    <!-- Feature -->
                                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                                        <div class="feature_title"><i class="fa fa-thumbs-down" aria-hidden="true"></i><span>Suggere</span></div>
                                                        <div class="feature_text ml-auto">5</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Cert 
                                        <div class="sidebar_section cert">
                                            <div class="sidebar_title">Certification</div>
                                            <div class="cert_image"><img src="images/cert.jpg" alt=""></div>
                                        </div>-->

                                        <!-- You may like -->
                                        <div class="sidebar_section like">
                                            <!-- You may like 
                                            <div class="sidebar_title">Autre</div>
                                            <div class="like_items">
                                            -->
                                                <!-- Like Item 
                                                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                    <div class="like_title_container">
                                                        <div class="like_title">cours</div>
                                                        <div class="like_subtitle">filiere</div>
                                                    </div>
                                                    <div class="like_price ml-auto">Gratuit</div>
                                                </div>-->
                                                <!-- Like Item 
                                                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                    <div class="like_title_container">
                                                        <div class="like_title">cours</div>
                                                        <div class="like_subtitle">filiere</div>
                                                    </div>
                                                    <div class="like_price ml-auto">Gratuit</div>
                                                </div>-->
                                                <!-- Like Item 
                                                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                    <div class="like_title_container">
                                                        <div class="like_title">cours</div>
                                                        <div class="like_subtitle">filiere</div>
                                                    </div>
                                                    <div class="like_price ml-auto">Gratuit</div>
                                                </div>-->
                                                <!-- Like Item 
                                                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                                                    <div class="like_title_container">
                                                        <div class="like_title">filiere</div>
                                                        <div class="like_subtitle">filiere</div>
                                                    </div>
                                                    <div class="like_price ml-auto">Gratuit</div>
                                                </div>-->
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
             
                
                
            <!-- ENDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD DESCRIPTIONNNNNNNNNNNNNNN ///////////////////////////////////////// -->    
            <!-- *************************************************************** -->
            <!-- Start First Cards courseeeeeeeeeeee --> 
            <!--
            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/informatique.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a class="hover" href="courses.php">Voir le cours</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="#!">
                        <h2>Informatique</h2>
                        <p>tous les cours lie a l'informatique</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/cours.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#!">Voir le cours</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="courses.php">
                        <h2>Economie</h2>
                        <p>tous les cours lie a la filiere economie</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/cours.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#!">Voir le cours</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="#!">
                        <h2>Sociologie</h2>
                        <p>tous les cours lie a la filiere Sociologie</p>
                    </a>
                </div>
            </div>
                
            
            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/cours.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a class="hover" href="#!">Voir le cours</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="#!">
                        <h2>Genie Civil</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/cours.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#!">Voir le cours</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="#!">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-img" style="background-image:url(assets/images/cours/cours.png);">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#!">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <a href="#!">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
                    </a>
                </div>
            </div>
                -->
                
                
                
                
                
                <!-- *************************************************************** -->
                <!-- SATISTIC CARD HAUT////////////////////////////////////////////////////
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                                        <span
                                            class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Clients</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller">$</sup>18,306</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                                        <span
                                            class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- STATISTIQUE GRAPHE //////////////////////////////////////////////
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Sales</h4>
                                <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                                <ul class="list-style-none mb-0">
                                    <li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">Direct Sales</span>
                                        <span class="text-dark float-right font-weight-medium">$2346</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">Referral Sales</span>
                                        <span class="text-dark float-right font-weight-medium">$2108</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">Affiliate Sales</span>
                                        <span class="text-dark float-right font-weight-medium">$1204</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Net Income</h4>
                                <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">
                                    <li class="list-inline-item text-muted font-italic">Sales for this month</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Earning by Location</h4>
                                <div class="" style="height:180px">
                                    <div id="visitbylocate" style="height:100%"></div>
                                </div>
                                <div class="row mb-3 align-items-center mt-1 mt-5">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">India</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">28%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">UK</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 74%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">China</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!--
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <h4 class="card-title mb-0">Earning Statistics</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4 mb-5">
                                    <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted font-italic">Earnings for this month</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Activity</h4>
                                <div class="mt-4 activity">
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">New Product Sold!</h5>
                                            <p class="font-14 mb-2 text-muted">John Musa just purchased <br> Cannon 5M
                                                Camera.
                                            </p>
                                            <span class="font-weight-light font-14 text-muted">10 Minutes Ago</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)"
                                                class="btn btn-danger btn-circle mb-2 btn-item">
                                                <i data-feather="message-square"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">New Support Ticket</h5>
                                            <p class="font-14 mb-2 text-muted">Richardson just create support <br>
                                                ticket</p>
                                            <span class="font-weight-light font-14 text-muted">25 Minutes Ago</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                                <i data-feather="bell"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Notification Pending Order!
                                            </h5>
                                            <p class="font-14 mb-2 text-muted">One Pending order from Ryne <br> Doe</p>
                                            <span class="font-weight-light font-14 mb-1 d-block text-muted">2 Hours
                                                Ago</span>
                                            <a href="javascript:void(0)" class="font-14 border-bottom pb-1 border-info">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <!--
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top Leaders</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Team</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Status
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Weeks
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="assets/images/users/widget-table-pic1.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                                Gover</h5>
                                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="popover-icon">
                                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                            href="javascript:void(0)">DS</a>
                                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                            href="javascript:void(0)">SS</a>
                                                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                            href="javascript:void(0)">RP</a>
                                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                            href="javascript:void(0)">+</a>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                                        data-placement="top" title="In Testing"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    35
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="assets/images/users/widget-table-pic2.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                                Kristeen
                                                            </h5>
                                                            <span class="text-muted font-14">Kristeen@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted px-2 py-4 font-14">Real Homes WP Theme</td>
                                                <td class="px-2 py-4">
                                                    <div class="popover-icon">
                                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                            href="javascript:void(0)">DS</a>
                                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                            href="javascript:void(0)">SS</a>
                                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                            href="javascript:void(0)">+</a>
                                                    </div>
                                                </td>
                                                <td class="text-center px-2 py-4"><i
                                                        class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Done"></i>
                                                </td>
                                                <td class="text-center text-muted font-weight-medium px-2 py-4">32</td>
                                                <td class="font-weight-medium text-dark px-2 py-4">$85K</td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="assets/images/users/widget-table-pic3.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                                Josephs
                                                            </h5>
                                                            <span class="text-muted font-14">Josephs@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted px-2 py-4 font-14">MedicalPro WP Theme</td>
                                                <td class="px-2 py-4">
                                                    <div class="popover-icon">
                                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                            href="javascript:void(0)">DS</a>
                                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                            href="javascript:void(0)">SS</a>
                                                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                            href="javascript:void(0)">RP</a>
                                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                            href="javascript:void(0)">+</a>
                                                    </div>
                                                </td>
                                                <td class="text-center px-2 py-4"><i
                                                        class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Done"></i>
                                                </td>
                                                <td class="text-center text-muted font-weight-medium px-2 py-4">29</td>
                                                <td class="font-weight-medium text-dark px-2 py-4">$81K</td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="assets/images/users/widget-table-pic4.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                                Petrovic
                                                            </h5>
                                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted px-2 py-4 font-14">Hosting Press php</td>
                                                <td class="px-2 py-4">
                                                    <div class="popover-icon">
                                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                            href="javascript:void(0)">DS</a>
                                                        <a class="btn btn-success text-white font-20 rounded-circle btn-circle"
                                                            href="javascript:void(0)">+</a>
                                                    </div>
                                                </td>
                                                <td class="text-center px-2 py-4"><i
                                                        class="fa fa-circle text-danger font-12" data-toggle="tooltip"
                                                        data-placement="top" title="In Progress"></i></td>
                                                <td class="text-center text-muted font-weight-medium px-2 py-4">23</td>
                                                <td class="font-weight-medium text-dark px-2 py-4">$80K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.includes.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->


@endsection


@section('extend-footer')

<!-- customise lass prince {{ asset('app-assets/') }}-->
<script src="{{ asset('app-assets/dist/js/course.js') }}"></script>


@endsection