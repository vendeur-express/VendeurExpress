<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="admin/dist/css/adminlte.min.css"

<?php $__env->startSection('titre'); ?>
    PRODUITS | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <br>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Liste des clients
                    </h2>
                </div> 
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Liste des clients</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NOM</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Commande</th>
                      <th>Contact</th>
                      <th>Address</th>
                      <th>Droit</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>zongo</td>
                      <td>celestin</td>
                      <td >celeste@gmail.com</td>
                      <td>12</td>
                      <td>77-58-69-36</td>
                      <td>Ouagadougou</td>
                      <td>client</td>
                    </tr>

                    <tr>
                        <td>zongo</td>
                        <td>celestin</td>
                        <td >celeste@gmail.com</td>
                        <td>12</td>
                        <td>77-58-69-36</td>
                        <td>Ouagadougou</td>
                        <td>client</td>
                      </tr>

                      <tr>
                        <td>zongo</td>
                        <td>celestin</td>
                        <td >celeste@gmail.com</td>
                        <td>12</td>
                        <td>77-58-69-36</td>
                        <td>Ouagadougou</td>
                        <td>demarcheur</td>
                      </tr>
                      <tr>
                        <td>zongo</td>
                        <td>celestin</td>
                        <td >celeste@gmail.com</td>
                        <td>12</td>
                        <td>77-58-69-36</td>
                        <td>Ouagadougou</td>
                        <td>admin</td>
                      </tr>

                      <tr>
                        <td>zongo</td>
                        <td>celestin</td>
                        <td >celeste@gmail.com</td>
                        <td>12</td>
                        <td>77-58-69-36</td>
                        <td>Ouagadougou</td>
                        <td>vendeur</td>
                      </tr>

                      <tr>
                        <td>zongo</td>
                        <td>celestin</td>
                        <td >celeste@gmail.com</td>
                        <td>12</td>
                        <td>77-58-69-36</td>
                        <td>Ouagadougou</td>
                        <td>Fournisseur</td>
                      </tr>
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Commande</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Droit</th>
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
    <!-- /.content -->
  </div>
  !-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="admin/dist/js/demo.js"></script>
  <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/superclient.blade.php ENDPATH**/ ?>