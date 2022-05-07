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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Etudiant</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Etudiant</a></li>
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
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div> 
                @endif
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Formulaire d'inscription</h4>
                                <form method="post" action="{{ route('etudiant.store') }}" entype="multipart/form-data">
                                    @csrf

                                    <hr>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nom"
                                                id="nom" placeholder="Nom">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Prenom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="prenom"
                                                id="prenom" placeholder="Prenom">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="adresse"
                                                id="adresse" placeholder="Adresse">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Genre</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre">
                                                <option selected value="Masculin">Masculin</option>
                                                <option value="Feminin">Feminin</option>
                                                <option value="Personne Morale">Personne Morale</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telephone"
                                                id="telephone" placeholder="Telephone">
                                        </div>
                                    </div>

                                    <!-- Information filiere class departement -->

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Departement</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" name="departement" id="departement" name="departement">
                                                <option>Departement</option>
                                                <!--<option selected>filiere</option>-->
                                                @foreach($departements as $departement)
                                                <option value="{{ $departement->id }}">{{ $departement->nomDepartement }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Filiere</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" name="filiere" id="filiere" name="filiere">
                                                <option>Filiere</option>
                                                <!--<option selected>filiere</option>
                                                @foreach($filieres as $filiere)
                                                <option value="{{ $filiere->id }}">{{ $filiere->nomFiliere }}</option>
                                                @endforeach
                                                -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Classe</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" name="classe" id="classe" name="classe">
                                                <option>Classe</option>
                                                <!--<option selected>filiere</option>
                                                @foreach($classes as $classe)
                                                <option value="{{ $classe->id }}">{{ $classe->nomClasse }}</option>
                                                @endforeach
                                                -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Annee-Scolaire</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="annee" name="annee">
                                                <!--<option selected>filiere</option>-->
                                                <option value="2022-2023">2022-2023</option>
                                                <option value="2023-2024">2023-2024</option>
                                                <option value="2024-2025">2024-2025</option>
                                                <option value="2025-2026">2025-2026</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--end Selected-->

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                id="email" placeholder="name@example.com">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password"
                                                id="password" placeholder="Password">
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
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                                    <label class="custom-file-label" for="inputGroupFile01">Selectionner une image</label>
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
<!--<script src="{{ asset('app-assets/dist/js/ajax/jquery.min.js') }}"></script>-->
        <script type="text/javascript">
            $(document).ready(function() {
                //Departement Select
                $('#departement').on('change', function() {
                    var departementID = $(this).val();
                    if(departementID) {
                        $.ajax({    
                            type: "GET",
                            url: "/get/filiere/"+departementID,
                            data : {"_token":"{{ csrf_token() }}"},
                            dataType: "json",
                            success: function(data)
                            {
                                if(data){
                                    //alert(data);
                                    $('#filiere').empty();
                                    $('#filiere').append('<option hidden>Filiere</option>'); 
                                    $.each(data, function(key, filiere){
                                        $('select[name="filiere"]').append('<option value="'+ key +'">' + filiere+ '</option>');
                                    });
                                }else{
                                    $('#filiere').empty();
                                }
                            }
                        });
                    }else{
                        $('#filiere').empty();
                    }
                });


                //Filiere Select
                $('#filiere').on('change', function() {
                    var filiereID = $(this).val();
                    //alert(filiereID);
                    if(filiereID) {
                        $.ajax({    
                            type: "GET",
                            url: "/get/classe/"+filiereID,
                            data : {"_token":"{{ csrf_token() }}"},
                            dataType: "json",
                            success: function(data)
                            {
                                if(data){
                                    //alert(data);
                                    $('#classe').empty();
                                    $('#classe').append('<option hidden>Classe</option>'); 
                                    $.each(data, function(key, filiere){
                                        $('select[name="classe"]').append('<option value="'+ key +'">' + filiere+ '</option>');
                                    });
                                }else{
                                    $('#classe').empty();
                                }
                            }
                        });
                    }else{
                        $('#classe').empty();
                    }
                });

            });
        </script>
@endsection