@extends('layouts.superadmin.app')
@section('titre')
   BANNIERE | VENDEUR EXPRESS
@endsection
@section('style')
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
@endsection

@section('contenu')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="card col-12 mt-3 ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <Form  action="{{route('add.slid')}}" id="slider_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" placeholder="Titre de la pub" name="titre_slid" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="url pub" name="url_slid" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Image</label>
                                    <input type="file" id="image_slid" name='image_slid' class="form-control">
                                </div>
                                <div class="from-group">
                                    <textarea name="dsc_slid" class="form-control" placeholder="Description"></textarea>
                                </div>

                                
                                <br>
                                <div class="modal-footer col-12  justify-content-end">
                                    <button type="submit"  class="btn btn-success float-right">Sauvegarder</button>
                                </div>
                            </Form>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Toutes les presentation</h3>
                                </div>
                                <div class="card-body">
                                    
                                    {{-- @if (Session::has('status'))
                                        <div class="alert.alert-danger">
                                            {{Session::get('status')}}
                                        </div> 
                                    @endif --}}
                                    <table class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Titre</th>
                                            <th>Url</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sliders as $ind=>$slider)
                                            <tr>
                                                <td>{{$ind+1}}</td>
                                                <td>{{ $slider->titre_slid }}</td>
                                                <td>{{ $slider->url_slid }}</td>
                                                <td>{{ $slider->dsc_slid }}</td>
                                                <td>
                                                    <img src="/storage/images_sliders/{{ $slider->image_slid }}"
                                                    style="height: 50px;width:100px " class="img-responsive">
                                                    </td>
                                                <td>
                                                    @if ($slider->status!=0)
                                                        <a href="{{ route('desactiverSlider',$slider->id)}}"
                                                        class="btn btn-success">
                                                        Desactiver
                                                        </a>
                                                    @else
                                                        <a href="{{ route('activerSlider',$slider->id)}}"
                                                            class="btn btn-warning">
                                                            Activer
                                                        </a> 
                                                    @endif
                                                    <button data-toggle="modal" data-target="#edit_slid" {{-- href="{{ route('editerSlider', $slider->id) }}" --}}
                                                        onclick="edit_slid({{ $slider}})" 
                                                        class="btn btn-primary">
                                                        <i class="nav-icon fas fa-edit"></i>
                                                    </button>
                                                    <a href="{{ route('SupprimerSlider', $slider->id) }}"
                                                        id="delete" 
                                                        class="btn btn-danger">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                        <tr >
                                            <td colspan="5"text-align="center">Aucune présentation enregistrée </td> 
                                         </tr> 
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Titre</th>
                                            <th>Url</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_slid">
    <div class="modal-dialog modal-md">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title text-danger font-weight-bold" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row justify-content-center ">
                <Form  action="{{route('update.slid', $slider->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="id_slid" type="text" name="id_slid" {{-- hidden --}}class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" id="titre_slid" placeholder="Titre de la pub" name="titre_slid"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="url pub" name="url_slid" id="url_slid" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col col-3">

                                </div>
                                <div class="col col-6">
                                    <input type="file" id="image_slid" style="display:none" name='image_slid' id="image_slid" class="form-control" onchange="file_path_display.innerHTML=image_slid.value">
                                    <span class="file-upload" onclick="image_slid.click()" ondragdrop="image_slid.dragdrop()">Upload....</span>
                                    <div id="file_path_display"></div>
                                </div>
                            </div>
                        </div>
                        <div class="from-group">
                            <textarea name="dsc_slid" id="dsc_slid" class="form-control" placeholder="Description"></textarea>
                        </div>
                    <br>
                    <div class="modal-footer col col-12  justify-content-end">
                        <button type="submit"  class="btn btn-success float-right">Sauvegarder</button>
                    </div>
                </Form>
            </div>
        </div>
    </div>
</div>    
@endsection

{{-- @section('contenu')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="card col-12 mt-3 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <Form class="container" method="POST"  id="slider_form">
                                    <div class="row">
                                        <div class="col-12 text-primary my-2 d-none" id="slid_upd_signal">Modification en
                                            cours...
                                            <button type="button" class="p-0 btn btn-danger"
                                                onclick=" reset_modification_slid()">
                                                Annuler </button>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="" id="upd_slid_id" value="0" hidden>
                                            <div class="form-group">
                                                <input type="text" id="titre_slid_val" class="form-control "
                                                    placeholder="Titre de la pub">
                                                <div class="invalid-feedback d-none" id="titre_slid_smg">
                                                    Veuillez saisir le titre de la pub
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="url_slid" class="form-control "
                                                    placeholder="Lien ">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="dsc_slid" class="form-control" rows="4" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" placeholder="Image " id="image_slid" class="form-control">
                                                <div class="invalid-feedback d-none" id="image_slid_smg">
                                                    Veuillez charger l'image
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer col-12 d-flex justify-content-end">
                                            <button type="button" id="save_slid" class="btn btn-success float-right"
                                                onclick="addSlider()">Ajouter</button>
                                        </div>
                                    </div>
                                </Form>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <table id="slid_table" class="table table-bordered table-striped table-responsive-lg">
                                    <thead class="">
                                        <tr>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Lien</th>
                                            <th>Images</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $slid)
                                            <tr>
                                                <td class="col-7">{{ $slid->titre_slid }}</td>
                                                <td class="col-7">
                                                {{ $slid->dsc_slid }}
                                                 </td>
                                                <td class="col-7">
                                                    {{ $slid->url_slid }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/images_slider/'.$slid->image_slid ) }}"
                                            style="height:50px; width:100px"
                                            class="img-responsive">
                                                </td>
                                                
                                                <td class=" d-flex justify-content-center">
                                                    <button class="btn btn-info btn-sm mx-2" type="button"
                                                        onclick="edit_slid( {{ $slid }})">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Editer
                                                        </a>
                                                        <button class="btn btn-danger btn-sm mx-2" type="button" id="delete"
                                                            data-toggle="modal" data-target="#del_slider"
                                                            data-backdrop="static" data-keyboard="false"
                                                            onclick="del_modal({{ $slid->id }})">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Supprimer
                                                        </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Lien</th>
                                            <th>Images</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
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

<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/js/block_ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    //   alert("hello")
    function edit_slid(slide) {
        $("#id_slid").val(slide.id);
        $("#titre_slid").val(slide.titre_slid);
        $("#dsc_slid").val(slide.dsc_slid);
        $("#image_slid").val(image_slid);
        $("#url_slid").val(slide.url_slid);
    }


       
    </script>
    <script>
        $(document).on("click","#delete",function(e){
            e.preventDefault();
            var link=$(this).attr("href");
            bootbox.confirm("Voulez vous vraiment appliquez la modification ?", function(confirmed){
                if(confirmed){
                    window.location.href=link;
                };
            });
        });
    </script> 
@endsection