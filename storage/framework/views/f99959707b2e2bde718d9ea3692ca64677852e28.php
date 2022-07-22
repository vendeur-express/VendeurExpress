
<?php $__env->startSection('titre'); ?>
    Catégories | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
  <style>
  .scrollable{
    overflow-y: auto;
    max-height: 1000px;
  }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>

<div class="content-wrapper">
    <section class="content">
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="card-header">
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(session()->has('status')): ?>
                    <h5 class="alert alert-success"><?php echo e(session('status')); ?></h5>
                <?php endif; ?>
                <?php if(session()->has('probleme')): ?>
                    <h5 class="alert alert-danger"><?php echo e(session('probleme')); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <Form  action="<?php echo e(route('categorie.store')); ?>" id="categorie_form" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputName">Nom catégorie</label>
                        <input type="text" id="label_cat" name='label_cat' class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="inputDescription">Description</label>
                        <textarea id="dsc_cat" name='dsc_cat' class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Image</label>
                        <input type="file" id="image_cat" name='image_cat' class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col md 4">
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </Form>
                

                
            </div>
            <div class="col-md-8">
                <div class="card scrollable">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $__empty_1 = true; $__currentLoopData = $categorie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ind=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($ind+1); ?></td>
                                        <td><?php echo e($category->label_cat); ?></td>
                                        <td><?php echo e($category->dsc_cat); ?></td>
                                        
                                        <td>
                                            
                                            
                                           
                                            <img src="<?php echo e(asset('storage/images_categorie/'.$category->image_cat )); ?>"
                                            style="height:50px; width:100px"
                                            class=" img-responsive">
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('editer_cat',$category->id)); ?>"
                                                class="btn btn-primary" data-toggle="modal" data-target="#editcategorie">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="<?php echo e(url('suprimer_cat',$category->id)); ?>" data-toggle="modal" id="delete" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                       <td colspan="5">Aucune catégorie enregistrée </td> 
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
         
    </div>
    
    <div class="modal fade" id="del_categorie">
        <div class="modal-dialog modal-md">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title text-danger font-weight-bold" id="modal_title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row justify-content-end">
                    <input type="text" name="" id="del_cat_id" hidden>
                    <button type="button" class="btn btn-danger mx-2" data-dismiss="modal">NON</button>
                    <button type="button" class="btn btn-success" onclick="del_cat()">OUI</button>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="editcategorie">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edition de    la catégorie</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>         
        <div class="modal-body">
          <Form class="container" enctype="multipart/form-data" name="form-categorie">
            
          <div class="row">
                <div class="col">
                <div class="form-group">
                    <label for="inputName">Nom catégorie</label>
                    <input type="text" id="label_cat" placeholder="<?php echo e(isset($category->label_cat)?$category->label_cat:" "); ?>" name='label_cat' class="form-control">
                    <?php $__errorArgs = ['label_cat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($status); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="from-group">
                    <label for="inputDescription">Description</label>
                    <textarea id="dsc_cat"  placeholder="<?php echo e(isset($category->dsc_cat)?$category->dsc_cat:" "); ?>" name='dsc_cat' class="form-control" rows="4"></textarea>
                    <?php $__errorArgs = ['dsc_cat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($status); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Image</label>
                    <input type="file" id="image_cat" name='image_cat' class="form-control">
                    <?php $__errorArgs = ['image_cat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($status); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            
        </Form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary float-right">Suavegarder</button>
      </div>
      </div>  
    </div>
</div>
  <!-- /.container-fluid -->
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/dist/js/bootbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
  <script>

    $(document).on("click","#delete",function(e){
        e.preventDefault();
        var link=$(this).attr("href");
        bootbox.confirm("Voulez vraiment supprimer cet élement ?", function(confirmed){
            if(confirmed){
                window.location.href=link;
            };
        });
    });
    function closeModal(modal_id) {
                $('#' + modal_id).modal('hide');
            }
            // reload page
            function reload_page() {
                location.reload();
            }

            //
            //traitement des attributs

            // reset attribut modification
            function reset_modifcation_cat() {
                $("#upd_cat_id").val('0');
                $("#save_cat").html("Ajouter");
                $("#cat_upd_signal").addClass('d-none');
                var reset = document.getElementById('categorie_form');
                reset.reset();
            }

            // activer le modale de suppression
            function del_modal(del_cat_id) {
                $("#del_cat_id").val(del_cat_id);
                $("#modal_title").html("Voulez-vous vraiment supprimer cet élement?");
            }

            //editer un catibut
            function edit_cat(cat_data) {

                $("#cat_val").val(cat_data.label_cat);
                $("#cat_dsc").val(cat_data.dsc_cat);
                $("#cat_image").val(cat_data.image_cat);
                $("#save_cat").html("Modifier");
                $("#upd_cat_id").val(cat_data.id);
                $("#cat_upd_signal").removeClass('d-none');
            }
    // function addCategorie(){
    //     if ($("#label_cat").val() == "") {
    //         $("#label_cat").addClass('is-invalid');
    //         $("#label_cat_smg").removeClass('d-none');
    //     }else{
    //         $("#label_cat").removeClass('is-invalid');
    //         $("#label_cat_smg").addClass('d-none');
    //         $.post(
    //         '<?php echo e(route('add.attr')); ?>', {
    //             label_cat: $("#label_cat").val(),
    //             dsc_cat: $("#dsc_cat").val(),
    //             image_cat: $("#image_cat").val(),
    //             cat_id: $("#upd_cat_id").val(),
    //             "_token": "<?php echo e(csrf_token()); ?>",
    //             },
    //             function(donnees) {
    //                 if (donnees['status'] == 200) {
    //                     if ($("#upd_cat_id").val() != 0) {
    //                         var reset = document.getElementById('categorie_form');
    //                         reset.reset();
    //                         $("#upd_cat_id").val('0');
    //                         $("#save_cat").html("Ajouter");
    //                         $("#attr_table tbody").html(donnees['data']);
    //                         $("#attr_upd_signal").addClass('d-none');
    //                         show_toast('Categorie modifié avec succès', 'success');

    //                     } else {
    //                         $("#attr_table tbody").html(donnees['data']);
    //                         var reset = document.getElementById('categorie_form');

    //                         reset.reset();
    //                         show_toast('Categorie ajouté avec succès', 'success');


    //                     }
    //                 } else if (donnees['status'] == 422) {
    //                     if ($("#upd_cat_id").val() != 0) {
    //                         show_toast('Impossible ajouter cette categorie', 'error')

    //                     } else {
    //                         show_toast('Impossible de modifier cette categorie', 'error')
    //                     }

    //                 } else if (donnees['status'] == 409) {
    //                     show_toast('Cette categorie existe déjà', 'error')
    //                 }

    //                 });
    //         )
    //     }
    // }
    // //Supprimer categorie
    // function del_attr() {
    //     $.post(
    //         '<?php echo e(route('del.attr')); ?>', {
    //             del_attr_id: $("#del_attr_id").val(),
    //             "_token": "<?php echo e(csrf_token()); ?>",
    //         },
    //         function(donnees) {
    //             if (donnees['status'] == 200) {
    //                 $("#attr_table tbody").html(donnees['data']);
    //                 $('#del_attribut').modal('hide');
    //                 reset_modifcation_attr();
    //                 show_toast('Elément supprimé avec succès', 'success');
    //             } else if (donnees['status'] == 422) {
    //                 show_toast('Impossible ajouter cet attribut', 'error')
    //             }
    //         });
    //     }
</script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/categorie.blade.php ENDPATH**/ ?>