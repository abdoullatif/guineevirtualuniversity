@extends('layouts.app')


@section('content')


<!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== {{ asset('app-assets/') }}-->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Discusions</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Apps</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Discusions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>
                                    <script>
                                        var d = new Date();
                                        var ye = new Intl.DateTimeFormat('fr', { year: 'numeric' }).format(d);
                                        var mo = new Intl.DateTimeFormat('fr', { month: 'short' }).format(d);
                                        var da = new Intl.DateTimeFormat('fr', { day: '2-digit' }).format(d);
                                        document.write(`${da} ${mo} ${ye}`);
                                    </script>
                                </option>
                                <!--
                                <option value="1">Mai 19</option>
                                <option value="2">Juin 19</option>
                                -->
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-xl-2 border-right">
                                    <div class="card-body border-bottom">
                                        <form>
                                            <input class="form-control" type="text" placeholder="Search Contact">
                                        </form>
                                    </div>
                                    <div class="scrollable position-relative" style="height: calc(100vh - 111px);">
                                        <ul class="mailbox list-style-none">
                                            <li>
                                                <div class="message-center">
                                                    <!-- Amis message -->
                                                    <a href="javascript:void(0)"
                                                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                        <div class="user-img"><img src="{{ asset('app-assets/assets/images/users/1.jpg') }}"
                                                                alt="user" class="img-fluid rounded-circle"
                                                                width="40px"> <span
                                                                class="profile-status online float-right"></span>
                                                        </div>
                                                        <div class="w-75 d-inline-block v-middle pl-2">
                                                            <h6 class="message-title mb-0 mt-1">users</h6>
                                                            <span
                                                                class="font-12 text-nowrap d-block text-muted text-truncate">message</span>
                                                            <span class="font-12 text-nowrap d-block text-muted">9:30</span>
                                                        </div>
                                                    </a>
                                                    <!-- Amis Message -->
                                                    
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9  col-xl-10">
                                    <div class="chat-box scrollable position-relative"
                                        style="height: calc(100vh - 111px);">
                                        <!--chat Row -->
                                        <ul class="chat-list list-style-none px-3 pt-3">
                                            <!--chat Row a-->
                                            <li class="chat-item list-style-none mt-3">
                                                <div class="chat-img d-inline-block"><img
                                                        src="{{ asset('app-assets/assets/images/users/1.jpg') }}" alt="user"
                                                        class="rounded-circle" width="45">
                                                </div>
                                                <div class="chat-content d-inline-block pl-3">
                                                    <h6 class="font-weight-medium">James Anderson</h6>
                                                    <div class="msg p-2 d-inline-block mb-1">Lorem
                                                        Ipsum is simply
                                                        dummy text of the
                                                        printing &amp; type setting industry.</div>
                                                </div>
                                                <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">10:56 am
                                                </div>
                                            </li>
                                            <!--chat Row a-->
                                            <li class="chat-item list-style-none mt-3">
                                                <div class="chat-img d-inline-block"><img
                                                        src="{{ asset('app-assets/assets/images/users/1.jpg') }}" alt="user"
                                                        class="rounded-circle" width="45">
                                                </div>
                                                <div class="chat-content d-inline-block pl-3">
                                                    <h6 class="font-weight-medium">Bianca Doe</h6>
                                                    <div class="msg p-2 d-inline-block mb-1">It’s
                                                        Great opportunity to
                                                        work.</div>
                                                </div>
                                                <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">10:57 am
                                                </div>
                                            </li>
                                            <!--chat Row b-->
                                            <li class="chat-item odd list-style-none mt-3">
                                                <div class="chat-content text-right d-inline-block pl-3">
                                                    <div class="box msg p-2 d-inline-block mb-1">I
                                                        would love to
                                                        join the team.</div>
                                                    <br>
                                                </div>
                                            </li>
                                            <!--chat Row b-->
                                            <li class="chat-item odd list-style-none mt-3">
                                                <div class="chat-content text-right d-inline-block pl-3">
                                                    <div class="box msg p-2 d-inline-block mb-1 box">
                                                        Whats budget
                                                        of the new project.</div>
                                                    <br>
                                                </div>
                                                <div class="chat-time text-right d-block font-10 mt-1 mr-0 mb-3">
                                                    10:59 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="chat-item list-style-none mt-3">
                                                <div class="chat-img d-inline-block"><img
                                                        src="{{ asset('app-assets/assets/images/users/1.jpg') }}" alt="user"
                                                        class="rounded-circle" width="45">
                                                </div>
                                                <div class="chat-content d-inline-block pl-3">
                                                    <h6 class="font-weight-medium">Angelina Rhodes</h6>
                                                    <div class="msg p-2 d-inline-block mb-1">Well we
                                                        have good budget
                                                        for the project
                                                    </div>
                                                </div>
                                                <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">11:00 am
                                                </div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="chat-item odd list-style-none mt-3">
                                                <div class="chat-content text-right d-inline-block pl-3">
                                                    <div class="box msg p-2 d-inline-block mb-1">I
                                                        would love to
                                                        join the team.</div>
                                                    <br>
                                                </div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="chat-item odd list-style-none mt-3">
                                                <div class="chat-content text-right d-inline-block pl-3">
                                                    <div class="box msg p-2 d-inline-block mb-1 box">
                                                        Whats budget
                                                        of the new project.</div>
                                                    <br>
                                                </div>
                                                <div class="chat-time text-right d-block font-10 mt-1 mr-0 mb-3">
                                                    10:59 am</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="input-field mt-0 mb-0">
                                                    <input id="textarea1" placeholder="Type and enter"
                                                        class="form-control border-0" type="text">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <a class="btn-circle btn-lg btn-cyan float-right text-white"
                                                    href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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


        <!--This page JavaScript -->
        <script>
            $(function () {
                $(document).on('keypress', "#textarea1", function (e) {
                    if (e.keyCode == 13) {
                        var id = $(this).attr("data-user-id");
                        var msg = $(this).val();
                        msg = msg_sent(msg);
                        $("#someDiv").append(msg);
                        $(this).val("");
                        $(this).focus();
                    }
                });
            });
        </script>

@endsection