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
                <div class="notification d-flex">
                          
                          <div class="dropdown d-flex">
                              <a class="nav-link icon settingbar" 
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                  <i class="fe fe-power"></i>
                                     
                                  </a>

                              
                       
                          </div>
                         <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form></a>
                      </div>
                        
          </div>
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
                        <h1 class="page-title">Nos Missions </h1>

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

                            <div class="card-header">
                                <h3 class="card-title">Ajouter Une Section</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="row clearfix" method="post" id="upload-image-form"
                                    enctype="multipart/form-data">

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Titre</label>
                                            <input type="text" class="form-control" name="titre" name="titre">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="description" name="description" class="form-control" rows="4" cols="33" ></textarea>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class=" col-sm-12">
                                        <button type="submit" id="add" class="btn btn-primary">Ajouter</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table
                                        class="table table-hover table-vcenter text-nowrap table-striped mb-0 js-basic-example"
                                        id="jours">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Libell?? Choix</th>


                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="res">
                                            @foreach ($sections as $u)

                                            <tr id="{!! $u->id!!}">
                                                <td>
                                                @if(isset($u->image))
                                                    <img src="<?php echo asset('storage/'.$u->image) ?>" width="200px"
                                                        height="200px" />
                                                    @else
                                                    <div></div>
                                                    @endif
                                                    </td>
                                                <td>{!! $u->titre!!} <br> {!! $u->description!!} </td>
<td>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                                        title="Delete" data-type="confirm"
                                                        onClick="supp({!! $u->id!!})"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
 
        <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright ?? 2022 <a href="https://themeforest.net/user/puffintheme/portfolio">Rahma
                                Feki</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#">MSM</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
</form>
<script>
$(document).ready(function() {
    $('#jours').DataTable({
        "pagingType": "full_numbers",
        "pageLength": 4
    });

});

function initi(id, lib, img) {

    $('#exampleModal').on('shown.bs.modal', function(e) {
        $("#lib").val(lib);

        $("#id").val(id);



    })
}
$('#upload-image-form').submit(function(e) {

    event.preventDefault();
    let formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: "{{ route('ajouter.section') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        contentType: false,
        processData: false,

        data: formData,

        success: function(response) {
            $("#rep").hide()
            if (response.errors) {
                $("#rep").show()
                $rep = "";
                for (let i = 0; i < response.errors.length; i++) {
                    $rep = $rep + '<div class="alert alert-danger" role="alert">' + response.errors[
                        i] + '</div>';
                }
                $("#rep").html($rep)

            } else {

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Section est ajout??e avec succ??s',
                    showConfirmButton: false,
                    timer: 3000
                })

                location.reload()

            }

        }
    });
});


function supp(index) {

    Swal.fire({
        title: 'vous ??tes s??re?',
        text: " C'est une op??ration irr??versible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ route('delete.section') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                data: {
                    'index': index
                },
                success: function(res) {

                    $('#' + res).remove();
                    location.reload();
                    Swal.fire(
                        'Supprim??!',
                        'Section est supprim??e avec succ??s.',
                        'success',

                    )


                },
                error: function() {

                }
            });

        }
    })
}
</script>

@endsection