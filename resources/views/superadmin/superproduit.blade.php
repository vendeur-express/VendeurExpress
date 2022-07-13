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
<link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
@extends('layouts.superadmin.app')
@section('titre')
    PRODUITS | VENDEUR EXPRESS
@endsection
@section('contenu')
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
                    
                    <li class="btn btn-secondary  float-right"> <a  href="{{route('superajout_produit')}}" class="text-white" >    Ajouter produit</a> </li>
                  </ul>
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
        </div>
    </section>
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
          <Form  method="POST" action="{{route('produits.store')}}" class="container" enctype="multipart/form-data" name="form-produit">
            @csrf
            {{-- row  1--}}
          <div class="row">
            <div class="col">

             
              <div class="form-group">
                <label for="inputName">Nom produit</label>
                <input type="text" name="nomproduit" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
               <label for="prix">Prix (F CFA)</label>
               <input id="prix" name="prix" type="number"class="form-control" rows="4" required />
             </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" name="description" class="form-control" rows="4"> </textarea>
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
               <select id="inputStatus" class="form-control custom-select" name="pays" required>
                 <option selected disabled>Sélectionnez un pays</option>
                 <option>Burkina Faso</option>
                 <option>Mali</option>
                 <option>Benin</option>
               </select>
             </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 --}}
          <div class="col">
            <div class="panel-heading">
              <label>Images
                s produit</label>
            </div>
            <div class="form-group">
              {{-- <label for="inputDescription">Image</label> --}}
              <input entype="multipart/form-data" id="image_cat" name='image_cat' class="form-control">
              <div class="input-images"></div>
          </div>
            {{-- <div class="panel-body">
              <form action="url" enctype="multipart/form-data">
                <div class="input-images"></div>
              </form>
                <div>
                  <button class="btn btn-info" id="submit-all">Téléchargez</button>
                </div>
              </div> --}}
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
          {{-- end col 2 --}}
          {{-- end row 1 --}}
        </Form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary float-right">Suavegarder</button>
      </div>
      </div>  
    </div>
  </div>
  <div class="modal fade 47 " id="createproduit">
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
            {{-- row  1--}}
          <div class="row">
            <div class="col">

              <div class="form-group">
                <label for="inputStatus">Type produits </label>
                <select id="type_produit" class="form-control custom-select" name="type_produits" required>
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
                <label for="prix">Etiquettes</label>
                <input id="Etiquette" type="text"class="form-control" rows="4"/>
              </div>

              <div class="form-group">
               <label for="prix">Prix (F CFA)</label>
               <input id="prix" type="number"class="form-control" rows="4" />
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
            {{-- end col 1 --}}
            {{-- col 2 --}}
          <div class="col">
            <div class="panel-heading">
              <label>Images produit</label>
            </div>
  
            <div class="panel-body">
              <div class="form-group" action="url" enctype="multipart/form-data">
                <div class="input-images"></div>
              </div>
              </div>
              <br>
             <div class="input-group mb-3 " id="attribut">
              <label>ATTRIBUTS</label>
              <select class="js-example-basic-multiple form-control "  multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 85%;" name="coleur" id="couleurId">
                <option value="1">Couleurs</option>
                <option value="2">Tailles</option>
              </select>
              <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02" onclick>Ok</label>
              </div>
             </div>
             <div class="row">
             <div class="form-group col-sm-6" id="couleur">
              <label>COULEURS</label>
              <div class="select2-purple">
                <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                  <option>Rouge</option>
                  <option>Jaune</option>
                  <option>rose</option>
                  <option>vert</option>
                </select>
              </div>
             </div>
             <div class="form-group col-sm-6" id="tailles" >
              <label>TAILLES</label>
              <div class="select2-purple">
                <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                  <option>XL</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XXL</option>
                </select>
              </div>
            </div>
          </div>
          <div id="prixattribut"> 
            <label>Prix</label>
            <input class="form-control form-control-lg" name="prix"  type="number">
          </div>
          <div class="mb4"></div>
          <div id="imageattribut" > 
            <label>Image </label>
            <input class="form-control form-control-lg" name="imageAttribut"  type="file">
          </div>
            </div>
          </div>
          
          {{-- end col 2 --}}
          {{-- end row 1 --}}
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
  @endsection
  @section('script')
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="admin/dist/js/bootbox.min.js"></script>
    <script src="admin/dist/js/image-uploader.min.js"></script>
    <script src="admin/plugins/select2/js/select2.full.min.js"></script>
    {{-- script pour suppression --}}
                                                                                                                                                                                                                                                                                                                                    
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
       var type_attribut = document.getElementById('couleurId');
       var prixattribut = document.getElementById('prixattribut');
       var couleur = document.getElementById('couleur');
       var image_attribut = document.getElementById('imageattribut');
       var tailles_attribut = document.getElementById('tailles');
       var attribut = document.getElementById('attribut');
       simple();
       type_produit.addEventListener('change', function() {
            if (type_produit.value == 1) {
              simple()
            } else{
              variable() 
            //   if (type_attribut.value == 1) {
            //   couleur()
            // } else if{
            //   variable() 
            // }
            // else{
            //   allattribut()
            // }

            }
        });
        
        // type_attribut.addEventListener('change', function() {
        //   if (type_attribut.value == 1) {
        //       couleur()
        //     } else if{
        //       variable() 
        //     }
        //     else{
        //       allattribut()
        //     }
        // }):
        function variable() {
          prixattribut.style.display = 'block'
          couleur.style.display = 'block'
          image_attribut.style.display = 'block'
          tailles_attribut.style.display = 'block'
          attribut.style.display = 'block'

        }
        
        function simple() {
          attribut.style.display = 'none'
          prixattribut.style.display = 'none'
          couleur.style.display = 'none'
          image_attribut.style.display = 'none'
          tailles_attribut.style.display = 'none'
        }
        // function couleur() {
        //   prixattribut.style.display = 'block'
        //   couleur.style.display = 'block'
        //   image_attribut.style.display = 'block'
        //   tailles_attribut.style.display = 'none'
        // }
        // function taille() {
        //   prixattribut.style.display = 'none'
        //   couleur.style.display = 'none'
        //   image_attribut.style.display = 'none'
        //   tailles_attribut.style.display = 'block'
        // }
        // function allattribut() {
        //   prixattribut.style.display = 'block'
        //   couleur.style.display = 'block'
        //   image_attribut.style.display = 'block'
        //   tailles_attribut.style.display = 'block'
        // }
        // var options = document.getElementById('attribut').options,
        //  count = 0;
        // for (var i=0; i < options.length; i++) {
        //    if (options[i].selected) count++;
          //  alert("le nombre de selection")

    
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
@endsection