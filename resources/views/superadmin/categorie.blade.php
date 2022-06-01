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
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('status'))
                <div class="alert alert-success">
                    {{ Session:get('status') }}
                </div>
            @endif
            <div class="col-md-4">
                <form  action="{{route('categorie.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                {{-- <div class="card car-body">
                    <img src="storage/assets/images_categories/{{$category->image_cat}}" style="height:50px;width:100px" class="elevation-2">
                            
                </div> --}}
            </div>
            <div class="col-md-8">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($categorie as $index=>$category)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$category->label_cat}}</td>
                                        <td>{{$category->dsc_cat}}</td>
                                        {{-- {{ dd(Storage_path("app\\public\\images_categorie\\".$category->image_cat ))}} --}}
                                        <td><img src={{$output = str_replace('\\', '/', Storage_path("public\\images_categories\\".$category->image_cat )) }}
                                            style="height:50px;width:100px"
                                            class="elevation-2"
                                            
                                            > </td>
                                        <td>
                                            <a href="{{ route('categorie.update',$category->id) }}"
                                                class="btn btn-primary">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('categorie.destroy',$category->id) }}"
                                                id="delete" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                   
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
         
    </div>
{{-- Modal de modification de produits --}}
<div class="modal fade" id="editcategorie">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edition du catégorie</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>         
        <div class="modal-body">
          <Form class="container" enctype="multipart/form-data" name="form-categorie">
            {{-- row  1--}}
          <div class="row">
            <div class="col">
              <<div class="form-group">
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
            </div>
            {{-- end col 1 --}}
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
    </section>
</div>
{{--  delete script --}}
<script src="admin/dist/js/bootbox.min.js"></script>
<script>
    /* $(document).on("click","#delete",function(e){
        e.preventDefault();
        var link=$(this).attr("href");
        bootbox.confirm("Voulez vraiment supprimer cet élement ?", function(confirmed){
            if(confirmed){
                window.location.href=link
            };
        });
    }); */
</script>
@endsection