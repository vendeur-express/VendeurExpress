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
                                <Form class="container" method="POST" enctype="multipart/form-data" id="slider_form">
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
                                                <input type="text" id="titre_slid" class="form-control "
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
                                <table id="attr_table" class="table table-bordered table-striped table-responsive-lg">
                                    <thead class="">
                                        <tr>
                                            <th>NOM</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $slid)
                                            <tr>
                                                <td class="col-7">{{ $slid->titre_slid }}
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
                                            <th>NOM</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
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
        // close modal
        function closeModal(modal_id) {
            $('#' + modal_id).modal('hide');
        }
        // reload page
        function reload_page() {
            location.reload();
        }


        // reset sliders modification
        function reset_modification_slid() {
            $("#upd_slid_id").val('0');
            $("#save_slid").html("Ajouter");
            $("#slid_upd_signal").addClass('d-none');
            var reset = document.getElementById('slider_form');
            reset.reset();
        }
        // activer le modale de suppression
        function del_modal(del_slid_id) {
            $("#del_slid_id").val(del_slid_id);
            $("#modal_title").html("Voulez-vous vraiment supprimer cet élement?");
        }

        //editer un slide
        function edit_slid(slid_data) {

            $("#titre_slid").val(slid_data.titre_slid);
            $("#dsc_slid").val(slid_data.dsc_slid);

            $("#save_slid").html("Modifier");
            $("#upd_slid_id").val(slid_data.id);
            $("#slid_upd_signal").removeClass('d-none');
        }
        // Ajouter un slidibut
        function addSlider() {
            // $.blockUI({
            //     css: {
            //         backgroundColor: 'none',
            //         border: 'none',
            //     },
            //     message: '<div class="spinner-grow text-light " style="width: 5rem; height: 5rem;" role="status "> <span class = "sr-only" > Loading... < /span> </div><div class="text-white h5">Chargement...<div/>',
            // });

            if ($("#titre_slid").val() == "") {
                $("#titre_slid").addClass('is-invalid');
                $("#titre_slid_smg").removeClass('d-none');
            }
            else if($("#image_slid").val()==""){
            $("#image_slid").addClass('is-invalid');
            $("#image_slid_smg").removeClass('d-none');
            }else {
                $("#titre_slid").removeClass('is-invalid');
                $("#titre_slid_smg").addClass('d-none');
                $.post(
                    '{{ route('add.slid') }}', {

                        titre_slid: $("#titre_slid").val(),
                        url_slid:$("#url_slid").val(),
                        dsc_slid: $("#dsc_slid").val(),
                        image_sld:$("#image_slid").val(),
                        slid_id: $("#upd_slid_id").val(),
                        "_token": "{{ csrf_token() }}",
                    },
                    function(donnees) {

                        if (donnees['status'] == 200) {
                            if ($("#upd_slid_id").val() != 0) {
                                var reset = document.getElementById('slider_form');
                                reset.reset();
                                $("#upd_slid_id").val('0');
                                $("#save_slid").html("Ajouter");
                                $("#slid_table tbody").html(donnees['data']);
                                $("#slid_upd_signal").addClass('d-none');
                                show_toast('presentation modifié avec succès', 'success');

                            } else {
                                $("#slid_table tbody").html(donnees['data']);
                                var reset = document.getElementById('slider_form');

                                reset.reset();
                                show_toast('Attribut ajouté avec succès', 'success');


                            }
                        } else if (donnees['status'] == 422) {
                            if ($("#upd_slid_id").val() != 0) {
                                show_toast('Impossible ajouter cette presentation', 'error')

                            } else {
                                show_toast('Impossible de modifier cette presentation', 'error')
                            }

                        } else if (donnees['status'] == 409) {
                            show_toast('Cette presentation existe déjà', 'error')
                        }

                    });
                // $.unblockUI();

            }

        }

        // Supprimer un attribut
        function del_attr() {
            $.post(
                '{{ route('del.attr') }}', {
                    del_attr_id: $("#del_attr_id").val(),
                    "_token": "{{ csrf_token() }}",
                },
                function(donnees) {
                    if (donnees['status'] == 200) {
                        $("#attr_table tbody").html(donnees['data']);
                        $('#del_attribut').modal('hide');
                        reset_modification_slid();
                        show_toast('Elément supprimé avec succès', 'success');
                    } else if (donnees['status'] == 422) {
                        show_toast('Impossible ajouter cet attribut', 'error')
                    }
                });
        }
    </script> 
@endsection