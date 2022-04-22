@extends('layouts.admin.app')
@section('titre')
    REMBOURSER | VENDEUR EXPRESS
@endsection
@section('contenu')
<div class="content-wrapper">
    <section class="content">
        <br>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Demandes de remboursement
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
                      <th>ID Commande</th>
                      <th>Magasin</th>
                      <th>Montant</th>
                      <th>Type</th>
                      <th>Raison</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Commande</th>
                            <th>Magasin</th>
                            <th>Montant</th>
                            <th>Type</th>
                            <th>Raison</th>
                            <th>Date</th>
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