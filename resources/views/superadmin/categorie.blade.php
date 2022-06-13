@extends('layouts.superadmin.app')
@section('titre')
    Catégories | VENDEUR EXPRESS
@endsection
@section('style')
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
  <style>
  .scrollable{
    overflow-y: auto;
    max-height: 1000px;
  }
  </style>
  
@endsection
@section('contenu')

<div class="content-wrapper">
    <section class="content">
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="card-header">
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif
            </div>
        </div>
        <div class="row">
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
                <div class="card scrollable">
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
                                @forelse ($categorie as $ind=>$category)
                                    <tr>
                                        <td>{{$ind+1}}</td>
                                        <td>{{$category->label_cat}}</td>
                                        <td>{{$category->dsc_cat}}</td>
                                        {{-- {{ dd(Storage_path("app\\public\\images_categorie\\".$category->image_cat ))}} --}}
                                        <td>
                                            {{-- <img src={{$output = str_replace('\\', '/', Storage_path("public\\images_categories\\".$category->image_cat )) }}
                                            style="height:50px;width:100px"
                                            class="elevation-2"> --}}
                                            {{-- {{ dd(asset($category->image_cat)) }} --}}

                                            <img src="{{ asset("storage/images_categories/".$category->image_cat) }}"
                                            style="height:50px; width:100px"
                                            class="{{-- elevation-1 --}} img-responsive">
                                        </td>
                                        <td>
                                            <a href="{{ route('editer_cat',$category->id) }}"
                                                class="btn btn-primary" data-toggle="modal" data-target="#editcategorie">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ url('suprimer_cat',$category->id) }}" data-toggle="modal" id="delete" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                       <td colspan="5">Aucune catégorie enregistrée </td> 
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom catégorie</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                {{ $categorie->links() }}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
         
    </div>
{{-- Modal de modification de produits --}}

<div class="modal fade" id="editcategorie">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edition de la catégorie</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>         
        <div class="modal-body">
          <Form class="container" enctype="multipart/form-data" name="form-categorie">
            {{-- row  1--}}
          <div class="row">
                <div class="col">
                <div class="form-group">
                    <label for="inputName">Nom catégorie</label>
                    <input type="text" id="label_cat" placeholder="{{isset($category->label_cat)?$category->label_cat:" " }}" name='label_cat' class="form-control">
                    @error('label_cat') <span class="text-danger">{{ $status }}</span> @enderror
                </div>
                <div class="from-group">
                    <label for="inputDescription">Description</label>
                    <textarea id="dsc_cat" name='dsc_cat' class="form-control" rows="4"></textarea>
                    @error('dsc_cat') <span class="text-danger">{{ $status }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="inputDescription">Image</label>
                    <input type="file" id="image_cat" name='image_cat' class="form-control">
                    @error('image_cat') <span class="text-danger">{{ $status }}</span> @enderror
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
@endsection
@section('script')
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/dist/js/bootbox.min.js"></script>
  {{-- script pour suppression --}}
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
<script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection