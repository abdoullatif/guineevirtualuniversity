@extends('layouts.app')


@section('extend-header')

<!-- This page plugin CSS {{ asset('app-assets/') }}-->
<link href="{{ asset('app-assets/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">


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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Programme</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Programme</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">all</li>
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
                                <h4 class="card-title">Formulaire d'enregistrement</h4>
                                <form method="post" action="{{ route('programme.store') }}">
                                    @csrf
                                    <hr>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Filiere</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" name="filiere" id="filiere" name="filiere">
                                                <!--<option>Filiere</option>-->
                                                <option selected>filiere</option>
                                                @foreach($filieres as $filiere)
                                                <option value="{{ $filiere->id }}">{{ $filiere->nomFiliere }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Classe</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="classe" name="classe_id">
                                                <option selected>Classe</option>
                                                <!--
                                                @foreach($classes as $classe)
                                                <option value="{{ $classe->classe_id }}">{{ $classe->nomClasse }} {{ $classe->nomFiliere }}</option>
                                                @endforeach
                                                -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Matiere</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="matiere_id">
                                                <!--<option selected>filiere</option>-->
                                                @foreach($matieres as $matiere)
                                                <option value="{{ $matiere->id }}">{{ $matiere->nomMatiere }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess"
                                            class="col-sm-2 col-form-label">Professeur</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="users_id">
                                                <!--<option selected>filiere</option>-->
                                                @foreach($professeurs as $professeur)
                                                <option value="{{ $professeur->id }}">{{ $professeur->nomPersonne }} {{ $professeur->prenomPersonne }}</option>
                                                @endforeach
                                            </select>
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

                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--
                                <h4 class="card-title">Zero Configuration</h4>
                                <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6>-->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Departement</th>
                                                <th>Filiere</th>
                                                <th>Matiere</th>
                                                <th>Classe</th>
                                                <th>Professeur</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($programmes as $programme)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $programme->nomDepartement }}</td>
                                                <td>{{ $programme->nomFiliere }}</td>
                                                <td>{{ $programme->nomMatiere }}</td>
                                                <td>{{ $programme->nomClasse }}</td>
                                                <td>{{ $programme->nomPersonne }} {{ $programme->prenomPersonne }}</td>
                                                <td>
                                                    <!-- Call to action buttons -->
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">
                                                            <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>id</th>
                                                <th>Departement</th>
                                                <th>Filiere</th>
                                                <th>Matiere</th>
                                                <th>Classe</th>
                                                <th>Professeur</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->

                
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

<!--This page plugins {{ asset('app-assets/') }}-->
<script src="{{ asset('app-assets/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {

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
                                        $('select[name="classe_id"]').append('<option value="'+ key +'">' + filiere+ '</option>');
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