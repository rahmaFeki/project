

<?php $__env->startSection('content'); ?>
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
                        <a class="nav-link icon settingbar" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                            <i class="fe fe-power"></i>

                        </a>



                    </div>
                    <form id="logout-form" action="<?php echo e(route('signout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
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
<?php echo $__env->make('layouts.leftside' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Start project content area -->
<div class="page">
    <!-- Start Page header -->
    <?php echo $__env->make('layouts.header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Start Page title and tab -->
    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="header-action">
                    <h1 class="page-title">Gestion Des Numèros de Télèphones </h1>

                </div>

            </div>
        </div>
    </div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">
                <span id="rep"></span>



                <div class="tab-pane active" id="Staff-add">
                    <?php echo csrf_field(); ?>
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">Ajouter Un Numèro de Télèphone</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row clearfix">
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label>Numèro de télèphone</label>
                                        <input type="tel" class="form-control" id="num" name="num">
                                    </div>
                                </div>

                                <div class=" col-sm-12">
                                    <button type="button" id="add" class="btn btn-primary">Ajouter</button>

                                </div>

                            </div>
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
                                            <th>Numéro Télèphone</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="res">
                                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr id="<?php echo $u->id; ?>">
                                            <td><?php echo $u->num; ?></td>


                                            <td><a href="" class="btn btn-icon btn-sm" title="Edit" data-toggle="modal"
                                                    data-target="#exampleModal"
                                                    onClick="initi(<?php echo $u->id; ?> , '<?php echo $u->num; ?>')"><i
                                                        class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                                    title="Delete" data-type="confirm" onClick="supp(<?php echo $u->id; ?>)"><i
                                                        class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mise à jour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" id="idU" name="idU" hidden>
                            <div class="form-group">
                                <label>Numèro De Télèphone</label>
                                <input type="text" class="form-control" id="numU" name="numU">
                            </div>
                        </div>




                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="enreg">Enregistrer</button>
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
                        Copyright © 2022 <a href="https://themeforest.net/user/puffintheme/portfolio">Rahma Feki</a>.
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
<script>
$(document).ready(function() {
    $('#jours').DataTable({
        "pagingType": "full_numbers",
        "pageLength": 4
    });

});

function initi(id, num) {

    $('#exampleModal').on('shown.bs.modal', function(e) {
        $("#numU").val(num);
        $("#idU").val(id);



    })
}
$("#add").click(function(event) {

    event.preventDefault();
    $num = $("#num").val();


    $.ajax({
        url: "<?php echo e(route('ajouter.contact')); ?>",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: {

            num: $num,



        },
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
                    title: 'Numèro de télèphone est ajouté avec succès',
                    showConfirmButton: false,
                    timer: 3000
                })

                location.reload()

            }

        }
    });
});
$("#enreg").click(function(event) {
    $num = $("#numU").val();
    $id = $("#idU").val();



    $.ajax({
        url: "<?php echo e(route('update.num')); ?>",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: {
            id: $id,
            num: $num,


        },
        success: function(response) {

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Choix est mis à jour avec succès',
                showConfirmButton: false,
                timer: 2500
            })


            $('#' + $id).html('<td>' + $num +
                '</td><td><a href="" class="btn btn-icon btn-sm" title="Edit" data-toggle="modal" data-target="#exampleModal"  onClick="initi(' +
                $id +
                ' ,$lib )"><i class="fa fa-edit"></i></a><button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm" onClick="supp(' +
                $id + ')" ><i class="fa fa-trash-o text-danger"></i></button></td>')


        }
    });
});

function supp(index) {

    Swal.fire({
        title: 'vous êtes sûre?',
        text: " C'est une opération irréversible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?php echo e(route('delete.contact')); ?>",
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
                        'Supprimé!',
                        'Numèro De Télèphone est supprimé avec succès.',
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\msm\resources\views/gestion_contact.blade.php ENDPATH**/ ?>