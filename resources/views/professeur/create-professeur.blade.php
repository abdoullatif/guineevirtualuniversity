@extends('layouts.app')


@section('extend-header')

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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Professeur</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Professeur</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Inscription</li>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Formulaire d'inscription</h4>
                                <form method="post" action="{{ route('professeur.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <hr>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nom"
                                                id="inputHorizontalSuccess" placeholder="Nom">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Prenom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="prenom"
                                                id="inputHorizontalSuccess" placeholder="Prenom">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="adresse"
                                                id="inputHorizontalSuccess" placeholder="Adresse">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Genre</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre">
                                                <option value="Masculin" selected>Masculin</option>
                                                <option value="Masculin">Feminin</option>
                                                <option value="Personne Morale">Personne Morale</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telephone"
                                                id="inputHorizontalSuccess" placeholder="Telephone">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                id="inputHorizontalSuccess" placeholder="name@example.com">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password"
                                                id="inputHorizontalSuccess" placeholder="Password">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Charger</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Selectionner un fichier</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <hr>
                                    

                                    <!--
                                    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" id="placeholder"
                                            placeholder="Nom">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="placeholder"
                                            placeholder="Prenom">
                                    </div>
                                    -->
                                        
                                        
                                        
                                        
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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

@endsection