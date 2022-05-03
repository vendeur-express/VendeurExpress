<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="admin/dist/css/adminlte.min.css"
@extends('layouts.admin.app')
@section('titre')
    PRODUITS | VENDEUR EXPRESS
@endsection
@section('contenu')
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <br>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <ul class="ml-auto">
                      <li class="btn btn-secondary  float-right"> <a class="text-white" href="{{route('ajout_produit')}}">Ajouter Produit</a> </li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NOM</th>
                      <th>UGS</th>
                      <th>STATUTS</th>
                      <th>STOCK</th>
                      <th>PRIX</th>
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
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.2</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.5</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>A</td>
                      <td>gdd</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                      <td>-</td>
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
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
                      <td>C/A<sup>1</sup></td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
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
                      <td>C</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
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
                      <td>A</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
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
                      <td>fsdg</td>
                      <td>
                        
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NOM</th>
                            <th>UGS</th>
                            <th>STATUTS</th>
                            <th>STOCK</th>
                            <th>PRIX</th>
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
  <!-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="admin/dist/js/demo.js"></script>
  <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
@endsection