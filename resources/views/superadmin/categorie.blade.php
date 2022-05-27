@extends('layouts.superadmin.app')
@section('titre')
    Catégories | VENDEUR EXPRESS
@endsection
<style>

</style>
@section('contenu')
<div class="content-wrapper">
    <section class="content">
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form {{ route('sauvercategorie') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                    <a class="btn btn-danger btn-sm" id="delete" href="{{-- {{url('/delete_categorie/'.$categorieProduit->id)}} --}}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Supprimer
                                    </a></td>
                                </tr>
                                {{-- @foreach ($categorieProduit as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->nom}}</td>
                                        <td>{{$category->slogan}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach --}}
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
{{--  delete script --}}
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
@endsection