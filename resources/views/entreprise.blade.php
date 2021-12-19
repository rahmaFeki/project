@extends('layouts.app')

@section('content')
<!-- Page Loader -->


<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
        <div class="hleft">
			
            <a class="header-brand" href="index.html"></a>
            <div class="dropdown">
                <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
               
            </div>
        </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
                <a href="login.html" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->

    <!-- Start Theme panel do not add in project -->

    <!-- Start Quick menu with more functio -->

    <!-- Start Main leftbar navigation -->
    @include('layouts.leftside' )
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        @include('layouts.header' )
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Mise à Jour Votre Entreprise</h1>

                    </div>

                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">


                    <span id="rep"></span>
                    <div class="tab-pane active" id="Staff-add">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row clearfix">

                                    <div class="col-lg-7 col-md-12 col-sm-12">

                                        <div class="card">

                                            <div class="card-header">
                                                <h3 class="card-title">Informations Entreprise</h3>
                                                <div class="card-options ">
                                                    <a href="#" class="card-options-collapse"
                                                        data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row clearfix">
                                                    <div class="col-md-6 col-sm-12">

                                                        <div class="form-group">
                                                            <label>Nom Entreprise</label>
                                                            @if(isset($entre->nom))
                                                            <input type="text" class="form-control" id="nom" name="nom"
                                                                value="{!!  $entre->nom !!}" />
                                                            @else
                                                            <input type="text" class="form-control" id="nom" name="nom"
                                                                value="" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if(isset($entre->id))
                                                    <input type="text" class="form-control" id="id" name="adresse"
                                                        value="{!! $entre->id!!}" hidden />
                                                    @else
                                                    <input type="text" class="form-control" id="id" value="7" hidden />
                                                    @endif
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            @if(isset($entre->nom))
                                                            <input type="text" class="form-control" id="email"
                                                                name="adresse" value="{!! $entre->email!!}" />
                                                            @else
                                                            <input type="text" class="form-control" id="email"
                                                                value="" />
                                                            @endif
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong id="email"></strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Adresse</label>
                                                            @if(isset($entre->nom))
                                                            <input type="text" class="form-control" id="adr"
                                                                name="prenom" value="{!! $entre->adr!!}" />
                                                            @else
                                                            <input type="text" class="form-control" id="adr" value="" />
                                                            @endif
                                                        </div>
                                                    </div>






                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Qui Sommes-Nous ?</h3>
                                                <div class="card-options ">
                                                    <a href="#" class="card-options-collapse"
                                                        data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row clearfix">

                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            @if(isset($entre->nom))
                                                            <textarea id="contenu" class="form-control" rows="4"
                                                                cols="33">{!! $entre->contenu!!}</textarea>
                                                            @else
                                                            <textarea id="contenu" name="story" class="form-control"
                                                                rows="4" cols="33" value="">
          @endif
</textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary" id="edit">Mettre à jour</button>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2022 <a href="https://themeforest.net/user/puffintheme/portfolio">Rahma
                                Feki</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">MSM</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script>
$("#edit").click(function(event) {
    $id = $("#id").val();
    $nom = $("#nom").val();
    $email = $("#email").val();
    $adr = $("#adr").val();
    $contenu = $("#contenu").val();
  
    if ($id != '6') {
        //$confirm=$("#confirm").val();
        $.ajax({
            url: "{{ route('ajouter.entrep') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {

                nom: $nom,
                email: $email,
                contenu: $contenu,
                adr: $adr,

            },
            success: function(response) {
                $("#rep").hide()
                if (response.errors) {
                    $("#rep").show()
                    $rep = "";
                    for (let i = 0; i < response.errors.length; i++) {
                        $rep = $rep + '<div class="alert alert-danger" role="alert">' + response
                            .errors[i] + '</div>';
                    }
                    $("#rep").html($rep)

                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Votre Entreprise est mis à jour avec succés',
                        showConfirmButton: false,
                        timer: 2500
                    })
                }

            }
        });
    } else {
        $.ajax({
            url: "{{ route('update.entrep') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                id: $id,
                nom: $nom,
                email: $email,
                contenu: $contenu,
                adr: $adr,


            },
            success: function(response) {

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Votre entreprise est mis à jour avec succès',
                    showConfirmButton: false,
                    timer: 2500
                })

            }
        });
    }
});
</script>

@endsection