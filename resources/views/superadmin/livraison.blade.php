@extends('layouts.superadmin.app')
@section('titre')
   Livraison | VENDEUR EXPRESS
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
                                <Form class="container" method="POST" action="{{route('livraisons')}}">
                                  @csrf
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="num_boutique" class="form-control "
                                                    placeholder="Numero de la boutique">
                                               
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="bout_desc" class="form-control "
                                                    placeholder="description ">
                                            </div>
                                            <div class="form-group">
                                                <input name="latitude" class="form-control"  placeholder="Latitude">
                                            </div>
                                            <div class="form-group">
                                                <input name="longitude" class="form-control"  placeholder="Longitude">
                                            </div>
                                        </div>                                      
                                    </div>
                                    <button type="submit" class="btn btn-success float-right">Ajouter</button>
                                </Form>
            
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <table id="attr_table" class="table table-bordered table-striped table-responsive-lg">
                                    <thead class="">
                                        <tr>
                                            <th>N* Boutique </th>
                                            <th>Description</th>
                                            <th>Latitude</th> 
                                            <th>Longitude</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            <tr>
                                                <td ></td>
                                                <td></td>
                                                <td></td> 
                                                <td></td> 
                                                <td >
    
                                                    <button class="btn btn-info btn-sm mx-2" type="button"
                                                        onclick="">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Editer
                                                        </a>
                                                        <button class="btn btn-danger btn-sm mx-2" type="button" id="delete"
                                                            data-toggle="modal" data-target="#del_slider"
                                                            data-backdrop="static" data-keyboard="false"
                                                            onclick="">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Supprimer
                                                        </button>
                                                </td>
                                                
                                            </tr>
                           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>N* Boutique </th>
                                            <th>Description</th>
                                            <th>Latitude</th> 
                                            <th>Longitude</th>
                                            <th>Action</th>
                                           
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