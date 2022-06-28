@extends('layouts.superadmin.app')
@section('titre')
   BANNIERE | VENDEUR EXPRESS
@endsection
@section('contenu')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i>
                                <h2 class="card-title">
                                    Toutes les présentations
                                </h2>
                            </i>
                            <i class="border-left">
                                <button>
                                    Ajouter bannière
                                </button>
                            </i>

                        </div>
                        <div class="card-body">
                            @if (session()->has('status'))
                                <h5 class="alert alert-success">{{ session('status') }}</h5>
                            @endif
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Numéro </th>
                                        <th> Image</th>
                                        <th>Descriptions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Numéro </th>
                                        <th> Image</th>
                                        <th>Descriptions</th>
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

    <Form class="container" method="POST" id="banniere_form">
        <div class="row">
            <div class="col-12 text-primary my-2 d-none" id="bann_upd_signal">Modification en
                cours...
                <button type="button" class="p-0 btn btn-danger"
                    onclick=" reset_modifcation_bann()">
                    Annuler </button>
            </div>
            <div class="col-12">
                <input type="text" name="" id="upd_bann_id" value="0" hidden>
                <div class="form-group">
                    <input type="text" id="bann_val" class="form-control "
                        placeholder="Nom Attribut">
                    <div class="invalid-feedback d-none" id="bann_val_smg">
                        Veuillez saisir le nom de l'attribut
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="bann_dsc" class="form-control" rows="4" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="modal-footer col-12 d-flex justify-content-end">
                <button type="button" id="save_bann" class="btn btn-success float-right"
                    onclick="addAttribute()">Ajouter</button>
            </div>
        </div>
    </Form>
@endsection
<script>
    
</script>