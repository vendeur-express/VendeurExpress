<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
<link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
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
                 <!-- /.card-header -->
                 <div class="card-header">
                  <ul class="ml-auto">
                    <h2>Listes des produits</h2>
                    <li class="btn btn-secondary  float-right"> <a class="text-white" data-toggle="modal" data-target="#createproduit" >Ajouter Produit</a> </li>
                  </ul>
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
                      <th>NOM</th>
                      <th>UGS</th>
                      <th>STATUTS</th>
                      <th>STOCK</th>
                      <th>PRIX</th>
                      <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>               
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td class="project-state">
                        <span class="badge badge-success">Reussi</span>
                      </td>
                      <td>3.5</td>
                      <td>fsdg</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            supprimer
                        </a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                          <th>NOM</th>
                          <th>UGS</th>
                          <th>STATUTS</th>
                          <th>STOCK</th>
                          <th>PRIX</th>
                          <th>ACTIONS</th>
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
  <div class="modal fade" id="editproduit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edition du produit</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>         
        <div class="modal-body">
          <Form  method="POST" action="produits" class="container" enctype="multipart/form-data" name="form-produit">
            <?php echo csrf_field(); ?>
            
          <div class="row">
            <div class="col">

             
              <div class="form-group">
                <label for="inputName">Nom produit</label>
                <input type="text" name="nomproduit" id="inputName" class="form-control">
              </div>
              <div class="form-group">
               <label for="prix">Prix (F CFA)</label>
               <input id="prix" name="prix" type="number"class="form-control" rows="4"/>
             </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label>Catégories</label>
                <div class="select2-purple">
                  <select class="js-example-basic-multiple"  multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
               <label for="inputStatus">Pays</label>
               <select id="inputStatus" class="form-control custom-select" name="pays">
                 <option selected disabled>Sélectionnez un pays</option>
                 <option>Burkina Faso</option>
                 <option>Mali</option>
                 <option>Benin</option>
               </select>
             </div>
            </div>
            
            
          <div class="col">
            <div class="panel-heading">
              <label>Images produit</label>
            </div>
  
            <div class="panel-body">
              <form action="url" enctype="multipart/form-data">
                <div class="input-images"></div>
              </form>
                <div>
                  <button class="btn btn-info" id="submit-all">Téléchargez</button>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Couleurs</label>
              <div class="select2-purple">
                <select class="js-example-basic-multiple"  multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                  <option>Rouge </option>
                  <option>Jaune</option>
                  <option>blue</option>
                  <option>Noir</option>
                  <option>blanc</option>
                  
                </select>
              </div>
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
  <div class="modal fade" id="createproduit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Ajouter un produit</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>         
        <div class="modal-body">
          <Form class="container" enctype="multipart/form-data" name="form-produit">
            
          <div class="row">
            <div class="col">

              <div class="form-group">
                <label for="inputStatus">Type produits </label>
                <select id="type_produit" class="form-control custom-select" name="type_produits">
                  <option selected disabled>Type de produits</option>
                  <option value="1">Produits simple</option>
                  <option value="2">Produits Variable</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Nom produit</label>
                <input type="text" name="nomproduit" id="inputName" class="form-control">
              </div>
              <div class="form-group">
               <label for="prix">Prix (F CFA)</label>
               <input id="prix" type="number"class="form-control" rows="4"/>
             </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label>Catégories</label>
                <div class="select2-purple">
                  <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
               <label for="inputStatus">Pays</label>
               <select id="inputStatus" class="form-control custom-select">
                 <option selected disabled>Sélectionnez un pays</option>
                 <option>Burkina Faso</option>
                 <option>Mali</option>
                 <option>Benin</option>
               </select>
             </div>

             
            </div>
            
            
          <div class="col">
            <div class="panel-heading">
              <label>Images produit</label>
            </div>
  
            <div class="panel-body">
              <form action="url" enctype="multipart/form-data">
                <div class="input-images"></div>
              </form>
                <div>
                  <button class="btn btn-info" id="submit-all">Téléchargez</button>
                </div>
              </div>
              <br>
             <div class="mb6"></div>
              <div class="form-group" id="couleurContainer" >
                <label>COULEURS</label>
                <div class="select2-purple" >
                  <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;" name="coleur" id="couleurId">
                    <option>Jaune</option>
                    <option>Vers</option>
                    <option>Rouge</option>
                    <option>Rose</option>
                    <option>Blanc</option>
                    <option>Noir</option>
                  </select>
                </div>
              </div>
              <div class="mb4"></div>
              <div class="form-group" id="attributContainer">
                <label>ATTRIBUTS</label>
                <div class="select2-purple">
                  <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez la taille" data-dropdown-css-class="select2-purple" style="width: 100%;" name="attributName" id="attribut">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                  </select>
                </div>
              </div>
              <div class="form-group" id="etiquetteContainer">
                <label for="inputName">Etiquette</label>
                <input type="text" name=" EtiquetteName" id="Etiquette" class="form-control">
              </div>
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
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('script'); ?>
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="admin/dist/js/bootbox.min.js"></script>
    <script src="admin/dist/js/image-uploader.min.js"></script>
    <script src="admin/plugins/select2/js/select2.full.min.js"></script>
    
    <script>
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
      });
      $(document).on("click","#delete",function(e){
          e.preventDefault();
          var link=$(this).attr("href");
          bootbox.confirm("Voulez vraiment supprimer cet élement ?", function(confirmed){
              if(confirmed){
                  window.location.href=link;
              };
          });
      });
      // images telechargement
      let preloaded = [
      {id: 1, src: 'https://picsum.photos/500/500?random=1'},
      {id: 2, src: 'https://picsum.photos/500/500?random=2'},
      {id: 3, src: 'https://picsum.photos/500/500?random=3'},
      {id: 4, src: 'https://picsum.photos/500/500?random=4'},
      {id: 5, src: 'https://picsum.photos/500/500?random=5'},
      {id: 6, src: 'https://picsum.photos/500/500?random=6'},
      ];
      $('.input-images').imageUploader({
        //preloaded:preloaded,
        extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
        mimes: ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'],
        maxSize: undefined,
        maxFiles: undefined,
      });
    </script>
    <script>

      (() => {
        'use strict';
  
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');
  
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
        event.preventDefault();
        event.stopPropagation();
  
        form.classList.add('was-validated');
        },false);
        });
      })();
    </script>
    <script>
       var type_produit = document.getElementById('type_produit');
       var attribut = document.getElementById('attributContainer');
       var couleur = document.getElementById('couleurContainer');
       var Etiquette = document.getElementById('etiquetteContainer');

       type_produit.addEventListener('change', function() {
            if (type_produit.value == 1) {
              simple()
            } else{
              variable()
            }

        });
        
        function variable() {
          attribut.style.display = 'block'
          couleur.style.display = 'block'
          Etiquette.style.display = 'block'
        }
        
        function simple() {
          attribut.style.display = 'none'
          couleur.style.display = 'none'
          Etiquette.style.display = 'none'
        }
      

    </script>
    <script src="admin/plugins/jszip/jszip.min.js"></script>
    <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   
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
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/superproduit.blade.php ENDPATH**/ ?>