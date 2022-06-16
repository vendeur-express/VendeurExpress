
<?php $__env->startSection('titre'); ?>
    PRODUITS | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                  <ul class="ml-auto">
                    <li class="btn btn-secondary  float-right"> <a class="text-white" data-toggle="modal" data-target="#createproduit" >Ajouter Produit</a> </li>
                  </ul>
                </div>
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
                      <td>Presto</td>
                      <td>Opera 9.0</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editproduit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete" >
                            <i class="fas fa-trash" >
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.2</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editproduit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.5</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editproduit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>A</td>
                      <td>gdd</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editproduit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" data-target="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nintendo DS browser</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>8.5</td>
                      <td>C/A<sup>1</sup></td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.1</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>3.1</td>
                      <td>C</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.3</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                      </td>
                      <td>3.3</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" id="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                      </td>
                      <td>3.5</td>
                      <td>fsdg</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editer
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" data-target="delete">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
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
        <Form class="container" enctype="multipart/form-data" name="form-produit">
          
        <div class="row">
          <div class="col">
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
      preloaded:preloaded,
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
  <script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/admin/produits.blade.php ENDPATH**/ ?>