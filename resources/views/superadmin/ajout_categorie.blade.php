@extends('layouts.superadmin.app')
@section('titre')
   Categorie | VENDEUR EXPRESS
@endsection
@section('contenu')
<br/>
<div class="content-wrapper">
    <section class="content">
        <div class="container">
          <div class="card card-secondary">
            <div class="card body">
              <div class="col-md-4">
                <form {{ route('sauvercategorie') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputcategoritype">Type catégorie</label>
                        <select id="inputStatus" class="form-control custom-select">
                        <option selected disabled>Sélectionnez-en un</option>
                        <option>Produits</option>
                        <option>Services</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Nom catégorie</label>
                        <input type="text" id="label_cat" name="label_cat" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="inputDescription">Description</label>
                        <textarea id="dsc_cat" name="dsc_cat" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Image</label>
                        <input type="file" name="image_cat" id="image_cat" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col md 4">
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection
 