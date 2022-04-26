@extends('layouts.admin.app')
@section('titre')
    COUPONS | VENDEUR EXPRESS
@endsection
@section('contenu')
    <div class="content-wrapper">
        <section class="content">
            <br>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            Liste des bons de réduction
                        </h2>
                    </div> 
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>CODE</th>
                        <th>TYPE</th>
                        <th>MONTANT</th>
                        <th>MAGASIN</th>
                        <th>LIMITE D'UTILISATION</th>
                        <th>DATE D'EXPIRATION</th>
                        <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>CODE</th>
                                <th>TYPE</th>
                                <th>MONTANT</th>
                                <th>MAGASIN</th>
                                <th>LIMITE D'UTILISATION</th>
                                <th>DATE D'EXPIRATION</th>
                                <th>ACTION</th>
                                </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection