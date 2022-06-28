@extends('layouts.superadmin.app')
@section('titre')
    ARTICLE | VENDEUR EXPRESS
@endsection
@section('contenu')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('posts.store')}}" class="contact-form mb-3">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="post" class="sr-only">Titre du post</label>
                                    <input type="text" name="post" class="form-control" id="post" placeholder="Titre du post*" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                            <div class="mb-2"></div>
                            <textarea class="form-control" name="message"  cols="30" rows="4" id="message" required placeholder="contenu du post *"></textarea>
                            <div class="mb-2"></div>
                            <div> 
                                <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                              </div>
                            <div class="mb-2"></div>
                            <button type="submit" class="btn btn-outline-success btn-minwidth-sm">
                                <span>Envoyez</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                        </form> <!-- End .contact-form -->
                    </div>
                </div>
            </div> <!-- End .col-lg-6 -->
            <div class="card-body col-sm-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Media</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Opera </td>
                    <th>Votre satisfaction, notre source de motivation.</th>
                    <th>image</th>
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
                    <td>promo</td>
                    <th>Votre satisfaction, notre source de motivation.</th>
                    <td>promo</td>
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
                          <th>Titre</th>
                          <th>Contenu</th>
                          <th>Media</th>
                          <th>Date</th>
                          <th>Actions</th>
                        </tr>
                  </tfoot>
                </table>
              </div>
        </div>
    </section>
</div>

@endsection