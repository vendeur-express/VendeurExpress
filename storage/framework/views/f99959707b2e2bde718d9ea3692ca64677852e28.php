
<?php $__env->startSection('titre'); ?>
    Catégories | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<style>

</style>
<?php $__env->startSection('contenu'); ?>
<div class="content-wrapper">
    <section class="content">
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form <?php echo e(route('sauvercategorie')); ?> method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
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
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th> Id catégorie</th>
                                    <th>Nom catégorie</th>
                                    <th>Slogan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5455</td>
                                    <td>Ordinateurs</td>
                                    <td>Unité centrale et portable</td>
                                    <td><a class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        modifier
                                    </a>
                                    <a class="btn btn-danger btn-sm" id="delete" href="">
                                        <i class="fas fa-trash">
                                        </i>
                                        Supprimer
                                    </a></td>
                                </tr>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th> Id catégorie</th>
                                    <th>Nom catégorie</th>
                                    <th>Slogan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
         
    </div>
    </section>
</div>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/categorie.blade.php ENDPATH**/ ?>