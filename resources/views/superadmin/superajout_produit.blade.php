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
    AJOUT PRODUIT | VENDEUR EXPRESS
@endsection
@section('contenu')
<div class="content-wrapper">
    <div class="card">
         <!-- /.card-header -->
         <div class="card-header">
          <ul class="ml-auto">
            <h2>Ajouter un produit</h2>
          </ul>
        </div>
    </div>
   <form>
    <div class="form-row d-flex" >
        <div class="col-sm-6 mb-3">
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
                <input type="text" name="nomproduit" id="inputName" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="prix">Etiquettes</label>
                <input id="Etiquette" type="text"class="form-control" rows="4"/>
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
        <div class="col-sm-6">
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
                   <div class="form-group col-sm-6 col-md-4 col-lg-2 " id="couleur">
                    <label>COULEURS</label>
                    <div class="select2-purple">
                      <select class="js-example-basic-multiple" multiple="multiple" data-placeholder="Selectionnez une catégories" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        <option>Rouge</option>
                        <option>Jaune</option>
                        <option>rose</option>
                        <option>vert</option>
                      </select>
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
    <button class="btn btn-primary" type="submit">Submit form</button>
   </form>
  </div>
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
@endsection