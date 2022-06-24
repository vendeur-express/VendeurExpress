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
                            <h2 class="card-title">
                                Toutes les présentations
                            </h2>
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
@endsection