
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form  action="<?php echo e(route('categorie.store')); ?>" method="POST" enctype="multipart/form-data">
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
                </form>
                
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
                                            
                                            

                                            <img src="<?php echo e(asset("storage/images_categories/".$category->image_cat)); ?>"
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
                                <?php echo e($categorie->links()); ?>

                            </tfoot>
                        </table>
                    </div>
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
                    <textarea id="dsc_cat" name='dsc_cat' class="form-control" rows="4"></textarea>
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
</script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/categorie.blade.php ENDPATH**/ ?>