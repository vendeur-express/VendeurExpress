@extends('layouts.superadmin.app')
@section('titre')
    coupon | VENDEUR EXPRESS
@endsection
@section('contenu')
<h1 class="text-center">Coupons</h1>
<div class="mb-3"></div>
<div class="row">
    <div class="content-wrapper main d-flex justify-content-center bg-white">
    
    <div class="col-lg-6 margin-1">
        <form action="#" class="contact-form mb-3">
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="tpost" placeholder="code du coupons*" required>
                </div><!-- End .col-sm-6 -->
            </div><!-- End .row -->
            <div class="mb-2"></div>
            <div class="row">
                            <div class="col-12">
              <label for="adresse">Le coût du coupon </label>
              <input id="adresse" class="form-control" type="number" name="" placeholder="coût du coupon">
            </div>
            <div class="row">
            <label for="adresse">Nombre d'utilisation</label>
              <input id="adresse" class="form-control" type="text" name="" placeholder="Le nombre d'utilsation">
            </div>

            </div>
            <div class="mb-2"></div>
            <button type="submit" class="btn btn-outline-success btn-minwidth-sm">
                <span>Envoyez</span>
                <i class="icon-long-arrow-right"></i>
            </button>
        </form><!-- End .contact-form -->
    </div> <!-- End .col-lg-6 -->
    <div class="card-body col-sm-12">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id</th>
            <th>code</th>
            <th>le montant</th>
            <th>Date d'expiration</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Oper-avex </td>
            <th>1000f</th>
            <th>22/04/2022</th>
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
            <td>2</td>
            <td>vexpromo</td>
            <th>500f</th>
            <th>22/04/2022</th>
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
                <th>Id</th>
            <th>code</th>
            <th>montant</th>
            <th>Date d'expiration</th>
            <th>Actions</th>
                </tr>
          </tfoot>
        </table>
      </div>
 </div><!-- End .row -->
</div>
@endsection