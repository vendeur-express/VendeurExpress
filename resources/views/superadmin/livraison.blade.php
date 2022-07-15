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

              <!-- Modal -->
              <form action="/supprimer_livraison" method="POST">
                @csrf
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer une livraison</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="livarison_delete_id" id="livraison_id">
                        <H5 class="text-danger">voulez vous vraiment supprimer cette livraison</H5> 
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuller</button>
                        <button type="submit " class="btn btn-danger">Oui supprimer</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="card col-12 mt-3 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <Form class="container" method="post" action="{{route('pointlivraison')}}">
                                  @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="num_boutique" class="form-control "
                                                    placeholder="Numero de la boutique" required>                                               
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
                                            <div class="form-group " id="villeid">
                                                <select name="idville" class="form-control ">
                                                    <option >choisissez la ville </option>
                                                    <option ></option>
                                                </select>
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
                                            <th>N* Boutique</th>
                                            <th>numero</th>
                                            <th>Latitude</th> 
                                            <th>Longitude</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($livraisons as $items)
                                            <tr>      
                                                <td >{{ $items->nom_li }}</td>
                                                <td>{{ $items->code_li }}</td>
                                                <td>{{ $items->altitude }}</td> 
                                                <td>{{ $items->logitude }}</td> 
                                                <td >
                                                        <a class="fas fa-pencil-alt btn btn-success" href="" >Editer</a>
                                                        
                                                       <button type="button" class="btn btn-danger delete_livraison" value="{{$items->id}}">Supprimer</button>

                                                </td> 
                                            </tr>
                                            @empty
                                            <tr>
                                               <td colspan="5">Aucun point de livraison enregistrée </td> 
                                            </tr>
                                        @endforelse
                                            
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
    <script>
        $(document).ready(function () {
       
                $(document).on('click';'.delete_livraison', function () {
                e.preventDefault();
               var livraison_id = $(this).val();
               $('#livraison_id').val(livraison_id);
               $('#deleteModal').modal('show');
            });
        });
        </script>
@endsection
