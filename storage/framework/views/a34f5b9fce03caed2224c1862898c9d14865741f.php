
<?php $__env->startSection('titre'); ?>
    REMBOURSER | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="content-wrapper">
    <section class="content">
        <br>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Demandes de remboursement
                    </h2>
                </div> 
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID Commande</th>
                      <th>Magasin</th>
                      <th>Montant</th>
                      <th>Type</th>
                      <th>Raison</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Commande</th>
                            <th>Magasin</th>
                            <th>Montant</th>
                            <th>Type</th>
                            <th>Raison</th>
                            <th>Date</th>
                          </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/admin/rembourser.blade.php ENDPATH**/ ?>