@extends('layouts.admin.app')
@section('titre')
    COMMANDES | VENDEUR EXPRESS
@endsection
@section('contenu')
    <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <br>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h2>
                                Liste des Commandes
                            </h2>
                        </div> 
                    </div>
                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Liste des Commandes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>NOM</th>
                              <th>DESCRIPTION</th>
                              <th>STATUTS</th>
                              <th>QUANTITE</th>
                              <th>PRIX</th>
                              <th>Information Complémentaires</th>
                              <th>DATE</th>
                              <th>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Presto</td>
                              <td>Opera 9.0</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>9.5</td>
                              <td>1000 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>Presto</td>
                              <td>Opera 9.2</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>9.5</td>
                              <td>1500 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>Presto</td>
                              <td>Opera 9.5</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>25</td>
                              <td>15000 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>Presto</td>
                              <td>Opera for Wii</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td>152</td>
                              <td>2000 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>Presto</td>
                              <td>Nokia N800</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>15.2</td>
                              <td>2050 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>Presto</td>
                              <td>Nintendo DS browser</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>8.5</td>
                              <td>15241 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>KHTML</td>
                              <td>Konqureror 3.1</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                              <td>3.1</td>
                              <td>1546 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>KHTML</td>
                              <td>Konqureror 3.3</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                              </td>
                              <td>3.3</td>
                              <td>2050 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            <tr>
                              <td>KHTML</td>
                              <td>Konqureror 3.5</td>
                              <td class="project-state">
                                <span class="badge badge-success">Success</span>
                              </td>
                              <td>3.5</td>
                              <td>24566 FCFA</td>
                              <th>Votre satisfaction, notre source de motivation.</th>
                              <th>22/04/20222</th>
                              <td>
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Modifier
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Supprimer
                                </a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>NOM</th>
                                    <th>DESCRIPTION</th>
                                    <th>STATUTS</th>
                                    <th>QUANTITE</th>
                                    <th>PRIX</th>
                                    <th>Information Complémentaires</th>
                                    <th>DATE</th>
                                    <th>ACTIONS</th>
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
            <!-- /.content -->
    </div>
@endsection