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
                @if (session()->has('probleme'))
                    <h5 class="alert alert-danger">{{ session('probleme') }}</h5>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <Form  action="{{route('categorie.store')}}" id="categorie_form" method="POST" enctype="multipart/form-data">
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
                </Form>
                {{-- <Form class="container" id="categorie_form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 text-primary my-2 d-none" id="cat_upd_signal">Modification en
                            cours...
                            <button type="button" class="p-0 btn btn-danger"
                                onclick=" reset_modifcation_cat()">
                                Annuler </button>
                        </div>
                        <div class="col-12">
                            <input type="text" name="" id="upd_cat_id" value="0" hidden>
                            <div class="form-group">
                                <label for="inputName">Nom catégorie</label>
                                <input type="text" id="label_cat" class="form-control">
                                <div class="invalid-feedback d-none" id="label_cat_smg">
                                    Veuillez saisir le nom de la catégorie
                                </div>
                            </div>
                            <div class="from-group">
                                <label for="inputDescription">Description</label>
                                <textarea id="dsc_cat" name='dsc_cat' class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Image</label>
                                <input type="file" id="image_cat"  class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer col-12 d-flex justify-content-end">
                            <button type="button" id="save_cat" class="btn btn-success float-right"
                                onclick="addCategorie()">Sauvegarder</button>
                        </div>
                    </div>
                </Form> --}}

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
                                           
                                            <img src="{{ asset('storage/images_categorie/'.$category->image_cat ) }}"
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
                                {{-- {{ $categorie->links() }} --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
         
    </div>
    {{-- Modal suppression categorie --}}
    <div class="modal fade" id="del_categorie">
        <div class="modal-dialog modal-md">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title text-danger font-weight-bold" id="modal_title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row justify-content-end">
                    <input type="text" name="" id="del_cat_id" hidden>
                    <button type="button" class="btn btn-danger mx-2" data-dismiss="modal">NON</button>
                    <button type="button" class="btn btn-success" onclick="del_cat()">OUI</button>
                </div>
            </div>
        </div>
    </div>
{{-- Modal de modification de produits --}}

<div class="modal fade" id="editcategorie">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Edition de    la catégorie</h3>
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
                    <textarea id="dsc_cat"  placeholder="{{isset($category->dsc_cat)?$category->dsc_cat:" " }}" name='dsc_cat' class="form-control" rows="4"></textarea>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
    function closeModal(modal_id) {
                $('#' + modal_id).modal('hide');
            }
            // reload page
            function reload_page() {
                location.reload();
            }

            //
            //traitement des attributs

            // reset attribut modification
            function reset_modifcation_cat() {
                $("#upd_cat_id").val('0');
                $("#save_cat").html("Ajouter");
                $("#cat_upd_signal").addClass('d-none');
                var reset = document.getElementById('categorie_form');
                reset.reset();
            }

            // activer le modale de suppression
            function del_modal(del_cat_id) {
                $("#del_cat_id").val(del_cat_id);
                $("#modal_title").html("Voulez-vous vraiment supprimer cet élement?");
            }

            //editer un catibut
            function edit_cat(cat_data) {

                $("#cat_val").val(cat_data.label_cat);
                $("#cat_dsc").val(cat_data.dsc_cat);
                $("#cat_image").val(cat_data.image_cat);
                $("#save_cat").html("Modifier");
                $("#upd_cat_id").val(cat_data.id);
                $("#cat_upd_signal").removeClass('d-none');
            }
    // function addCategorie(){
    //     if ($("#label_cat").val() == "") {
    //         $("#label_cat").addClass('is-invalid');
    //         $("#label_cat_smg").removeClass('d-none');
    //     }else{
    //         $("#label_cat").removeClass('is-invalid');
    //         $("#label_cat_smg").addClass('d-none');
    //         $.post(
    //         '{{ route('add.attr') }}', {
    //             label_cat: $("#label_cat").val(),
    //             dsc_cat: $("#dsc_cat").val(),
    //             image_cat: $("#image_cat").val(),
    //             cat_id: $("#upd_cat_id").val(),
    //             "_token": "{{ csrf_token() }}",
    //             },
    //             function(donnees) {
    //                 if (donnees['status'] == 200) {
    //                     if ($("#upd_cat_id").val() != 0) {
    //                         var reset = document.getElementById('categorie_form');
    //                         reset.reset();
    //                         $("#upd_cat_id").val('0');
    //                         $("#save_cat").html("Ajouter");
    //                         $("#attr_table tbody").html(donnees['data']);
    //                         $("#attr_upd_signal").addClass('d-none');
    //                         show_toast('Categorie modifié avec succès', 'success');

    //                     } else {
    //                         $("#attr_table tbody").html(donnees['data']);
    //                         var reset = document.getElementById('categorie_form');

    //                         reset.reset();
    //                         show_toast('Categorie ajouté avec succès', 'success');


    //                     }
    //                 } else if (donnees['status'] == 422) {
    //                     if ($("#upd_cat_id").val() != 0) {
    //                         show_toast('Impossible ajouter cette categorie', 'error')

    //                     } else {
    //                         show_toast('Impossible de modifier cette categorie', 'error')
    //                     }

    //                 } else if (donnees['status'] == 409) {
    //                     show_toast('Cette categorie existe déjà', 'error')
    //                 }

    //                 });
    //         )
    //     }
    // }
    // //Supprimer categorie
    // function del_attr() {
    //     $.post(
    //         '{{ route('del.attr') }}', {
    //             del_attr_id: $("#del_attr_id").val(),
    //             "_token": "{{ csrf_token() }}",
    //         },
    //         function(donnees) {
    //             if (donnees['status'] == 200) {
    //                 $("#attr_table tbody").html(donnees['data']);
    //                 $('#del_attribut').modal('hide');
    //                 reset_modifcation_attr();
    //                 show_toast('Elément supprimé avec succès', 'success');
    //             } else if (donnees['status'] == 422) {
    //                 show_toast('Impossible ajouter cet attribut', 'error')
    //             }
    //         });
    //     }
</script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection