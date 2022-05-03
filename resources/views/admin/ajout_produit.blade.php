@extends('layouts.admin.app')
@section('titre')
    AJOUT PRODUIT | VENDEUR EXPRESS
@endsection
@section('contenu')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
             <div class="col-md-6">
               <div class="card card-secondary">
                 <div class="card-header text-center">
                   <h3 class="card-title">Ajouter un produit</h3>
                 </div>
                 <div class="card-body">
                   <div class="form-group">
                     <label for="inputName">Nom produit</label>
                     <input type="text" id="inputName" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="inputDescription">Description</label>
                     <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                   </div>
                   <div class="form-group">
                    <label for="prix">Prix</label>
                    <input id="prix" type="number"class="form-control" rows="4"/>
                  </div>
                   <div class="form-group">
                     <label for="inputStatus">Catégorie</label>
                     <select id="inputStatus" class="form-control custom-select">
                       <option selected disabled>Sélectionnez-en un</option>
                       <option>On Hold</option>
                       <option>Canceled</option>
                       <option>Success</option>
                     </select>
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
                 <!-- /.card-body -->
               </div>
               <!-- /.card -->
             </div>
       </div>
    </section>
</div>
@endsection