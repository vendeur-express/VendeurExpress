@extends('layouts.superadmin.app')
@section('titre')
    PRODUITS | VENDEUR EXPRESS
@endsection

@section('style')
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
@endsection
@section('contenu')
    <div class="container-fluid">

        <div class="row">
            <div class="card col-12 mt-3 ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <Form class="container" method="POST" id="attribut_form">
                                <div class="row">
                                    <div class="col-12 text-primary my-2 d-none" id="attr_upd_signal">Modification en
                                        cours...
                                        <button type="button" class="p-0 btn btn-danger"
                                            onclick=" reset_modifcation_attr()">
                                            Annuler </button>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="" id="upd_attr_id" value="0" hidden>
                                        <div class="form-group">
                                            <input type="text" id="attr_val" class="form-control "
                                                placeholder="Nom Attribut">
                                            <div class="invalid-feedback d-none" id="attr_val_smg">
                                                Veuillez saisir le nom de l'attribut
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="attr_dsc" class="form-control" rows="4" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer col-12 d-flex justify-content-end">
                                        <button type="button" id="save_attr" class="btn btn-success float-right"
                                            onclick="addAttribute()">Ajouter</button>
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
                                    @foreach ($attributes as $attr)
                                        <tr>
                                            <td class="col-7">{{ $attr->label_at }}
                                            <td class=" d-flex justify-content-center">

                                                <button class="btn btn-info btn-sm mx-2" type="button"
                                                    onclick="edit_attr( {{ $attr }})">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Editer
                                                    </a>
                                                    <button class="btn btn-danger btn-sm mx-2" type="button" id="delete"
                                                        data-toggle="modal" data-target="#del_attribut"
                                                        data-backdrop="static" data-keyboard="false"
                                                        onclick="del_modal({{ $attr->id }})">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Supprimer
                                                    </button>
                                                    <button class="btn btn-secondary btn-sm  mx-2" data-toggle="modal"
                                                        data-target="#attribute_values" data-backdrop="static"
                                                        data-keyboard="false" onclick="attr_values({{ $attr }})">
                                                        <i class="fas fa-list"></i>
                                                        Valeurs
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
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="modal fade" id="del_attribut">
            <div class="modal-dialog modal-md">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger font-weight-bold" id="modal_title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row justify-content-end">
                        <input type="text" name="" id="del_attr_id" hidden>
                        <button type="button" class="btn btn-danger mx-2" data-dismiss="modal">NON</button>
                        <button type="button" class="btn btn-success" onclick="del_attr()">OUI</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal pour afficher les valeurs des attributs --}}
        <div class="modal fade" id="attribute_values">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Attribute values</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="reload_page()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="attr_val_id" hidden>
                        <Form class="container" method="POST" id="attr_val_form">
                            {{-- row  1 --}}
                            <div class="row">
                                <div class="col-12 text-primary d-none" id="attr_val_upd_signal">Modification en cours...
                                    <button type="button" class="p-0 btn btn-danger"
                                        onclick="reset_modifcation_attr_val()"> Annuler </button>
                                </div>
                                <div class="col-12 input-group py-3">

                                    <input type="text" id="attr_val_for_type" value="0" hidden>
                                    <input type="text" id="attr_val_value" class="form-control py-2"
                                        placeholder="ajouter une valeur">

                                    <div class="input-group-append ">
                                        <button class="input-group-text text-white bg-success" type="button"
                                            onclick="add_attr_val()" id="save_attr_val">Ajouter</button>
                                    </div>
                                    <div class="invalid-feedback d-none" id="attr_elem_val_smg">
                                        Veuillez saisir la valeur
                                    </div>
                                </div>

                                <div class="col-12">
                                    <table id="attr_val_table" class="table table-striped mt-3">
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="del_attr_val_modal">
                <div class="modal-dialog modal-md">
                    <div class="modal-content bg-light">
                        <div class="modal-header">
                            <input type="text" name="" id="del_attr_val_id" hidden>
                            <h5 class="modal-title text-danger font-weight-bold" id="attr_val_modal_title"></h5>
                            <button type="button" class="close" onclick="closeModal('del_attr_val_modal')">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row justify-content-end">
                            <button type="button" class="btn btn-danger mx-2"
                                onclick="closeModal('del_attr_val_modal')">NON</button>
                            <button type="button" class="btn btn-success" onclick="del_attr_val_id()">OUI</button>
                        </div>
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

            //
            //traitement des attributs

            // reset attribut modification
            function reset_modifcation_attr() {
                $("#upd_attr_id").val('0');
                $("#save_attr").html("Ajouter");
                $("#attr_upd_signal").addClass('d-none');
                var reset = document.getElementById('attribut_form');
                reset.reset();
            }
            // activer le modale de suppression
            function del_modal(del_attr_id) {
                $("#del_attr_id").val(del_attr_id);
                $("#modal_title").html("Voulez-vous vraiment supprimer cet élement?");
            }

            //editer un attribut
            function edit_attr(attr_data) {

                $("#attr_val").val(attr_data.label_at);
                $("#attr_dsc").val(attr_data.dsc_at);
                $("#save_attr").html("Modifier");
                $("#upd_attr_id").val(attr_data.id);
                $("#attr_upd_signal").removeClass('d-none');
            }
            // Ajouter un attribut
            function addAttribute() {
                // $.blockUI({
                //     css: {
                //         backgroundColor: 'none',
                //         border: 'none',
                //     },
                //     message: '<div class="spinner-grow text-light " style="width: 5rem; height: 5rem;" role="status "> <span class = "sr-only" > Loading... < /span> </div><div class="text-white h5">Chargement...<div/>',
                // });

                if ($("#attr_val").val() == "") {
                    $("#attr_val").addClass('is-invalid');
                    $("#attr_val_smg").removeClass('d-none');
                } else {
                    $("#attr_val").removeClass('is-invalid');
                    $("#attr_val_smg").addClass('d-none');
                    $.post(
                        '{{ route('add.attr') }}', {

                            attr_val: $("#attr_val").val(),
                            attr_dsc: $("#attr_dsc").val(),
                            attr_id: $("#upd_attr_id").val(),
                            "_token": "{{ csrf_token() }}",
                        },
                        function(donnees) {

                            if (donnees['status'] == 200) {
                                if ($("#upd_attr_id").val() != 0) {
                                    var reset = document.getElementById('attribut_form');
                                    reset.reset();
                                    $("#upd_attr_id").val('0');
                                    $("#save_attr").html("Ajouter");
                                    $("#attr_table tbody").html(donnees['data']);
                                    $("#attr_upd_signal").addClass('d-none');
                                    show_toast('Attribut modifié avec succès', 'success');

                                } else {
                                    $("#attr_table tbody").html(donnees['data']);
                                    var reset = document.getElementById('attribut_form');

                                    reset.reset();
                                    show_toast('Attribut ajouté avec succès', 'success');


                                }
                            } else if (donnees['status'] == 422) {
                                if ($("#upd_attr_id").val() != 0) {
                                    show_toast('Impossible ajouter cet attribut', 'error')

                                } else {
                                    show_toast('Impossible de modifier cet attribut', 'error')
                                }

                            } else if (donnees['status'] == 409) {
                                show_toast('Cet attribut existe déjà', 'error')
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
                            reset_modifcation_attr();
                            show_toast('Elément supprimé avec succès', 'success');
                        } else if (donnees['status'] == 422) {
                            show_toast('Impossible ajouter cet attribut', 'error')
                        }
                    });
            }
            // voir les valeurs d'un attribut
            function attr_values(attr_vals) {
                // console.log(attr_vals)
                var tbody = '';
                attr_vals.attribute_values.forEach(element => {
                    tbody += '<tr class="d-flex"><td class="col-sm-4 col-md-6 col-lg-8">' + element['value'] +
                        '</td><td class="col-sm-8 col-md-6 col-lg-4 d-flex justify-content-end"><button type="button" class="btn btn-info btn-sm mx-2"onclick="edit_attr_val(\'' +
                        element['value'] +
                        '\',' + element['id'] +
                        ')"><i class="fas fa-pencil-alt"></i>Editer</button><button class="btn btn-danger btn-sm"id="delete" type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#del_attr_val_modal" onclick="attr_val_del_modal(' +
                        element['id'] + ')"><i class="fas fa-trash"></i>Supprimer</button></td></tr>'
                });

                $("#attr_val_table tbody").html(tbody);
                $("#attr_val_id").val(attr_vals.id);
            }



            /////////////////////////////////////////////////////////////////////////////////////////////
            //traitement des valeurs des attributs
            // reset attribut modification
            function reset_modifcation_attr_val() {
                $("#attr_val_for_type").val('0');
                $("#save_attr_val").html("Ajouter");
                $("#attr_val_upd_signal").addClass('d-none');
                var reset = document.getElementById('attr_val_form');
                reset.reset();
            }
            // activer le modale de suppression
            function attr_val_del_modal(del_attr_id) {
                $("#del_attr_val_id").val(del_attr_id);
                $("#attr_val_modal_title").html("Voulez-vous vraiment supprimer cet élement?");
            }

            // Ajouter la une valeur d'attribut
            function add_attr_val() {
                if ($("#attr_val_value").val() == "") {
                    $("#attr_val_value").addClass('is-invalid');
                    $("#attr_elem_val_smg").removeClass('d-none');
                } else {
                    $("#attr_val_value").removeClass('is-invalid');
                    $("#attr_elem_val_smg").addClass('d-none');
                    $.post(
                        '{{ route('add.attr.val') }}', {
                            attr_val: $("#attr_val_value").val(),
                            id_attr: $("#attr_val_id").val(),
                            attr_val_id: $("#attr_val_for_type").val(),
                            attr_val_type: $("#attr_val_for_type").val(),
                            "_token": "{{ csrf_token() }}",
                        },
                        function(donnees) {
                            if (donnees['status'] == 200) {
                                $("#attr_val_table tbody").html(donnees['data']);
                                if ($("#attr_val_for_type").val() == "0") {
                                    show_toast('Elément ajouté avec succès', 'success')
                                    var reset = document.getElementById('attr_val_form');
                                    reset.reset();
                                } else {
                                    reset_modifcation_attr_val();
                                    show_toast('Elément modifié avec succès', 'success')
                                }

                            } else if (donnees['status'] == 422) {
                                show_toast('Impossible ajouter cet element', 'error')
                            } else if (donnees['status'] == 409) {
                                show_toast('Cet élément existe déjà', 'error')
                            }
                        });
                }

            }

            //editer un attribut value
            function edit_attr_val(attr_edit_val, attr_val_select_id) {
                $("#attr_val_value").val(attr_edit_val);
                $("#save_attr_val").html("Modifier");
                $("#attr_val_for_type").val(attr_val_select_id);
                $("#attr_val_upd_signal").removeClass('d-none');
            }

            function del_attr_val_id() {
                $.post(
                    '{{ route('del.attr.val') }}', {
                        del_attr_val_id: $("#del_attr_val_id").val(),
                        "_token": "{{ csrf_token() }}",
                    },
                    function(donnees) {
                        if (donnees['status'] == 200) {
                            reset_modifcation_attr_val()
                            closeModal('del_attr_val_modal');
                            show_toast('Elément supprimé avec succès', 'warning');
                            $("#attr_val_table tbody").html(donnees['data']);
                        } else if (donnees['status'] == 422) {
                            show_toast('Impossible ajouter cet attribut', 'error')
                        }
                    });
            }

            function show_toast(content, type) {

                switch (type) {

                    case 'success':
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.success(content);
                        break;
                    case 'error':
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.error(content);
                        break;
                    case 'warning':
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        toastr.warning(content);
                        break;

                    default:
                        break;
                }

            }
        </script>
    @endsection
