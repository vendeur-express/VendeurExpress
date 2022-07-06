
<?php $__env->startSection('titre'); ?>
    PUBLICITE | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">
                                Toutes les publications
                            </h2>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('status')): ?>
                                <h5 class="alert alert-success"><?php echo e(session('status')); ?></h5>
                            <?php endif; ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Numéro </th>
                                        <th> Image</th>
                                        <th>Descriptions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Numéro </th>
                                        <th> Image</th>
                                        <th>Descriptions</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/publicite.blade.php ENDPATH**/ ?>