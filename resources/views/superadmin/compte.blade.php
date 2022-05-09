@extends('layouts.superadmin.app')
@section('titre')
  COMPTE | VENDEUR EXPRESS
@endsection
@section('contenu')
    <main class="main d-flex justify-content-center" >
        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">S'inscrire</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="sr-only">Pays</label>
                                            <select name="Type de compte" class="form-control">
                                                <option>Type de compte</option>
                                                <option>Demarcheur</option>
                                                <option>Fournisseur</option>
                                                <option>Vendeur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-6" >
                                            <label for="cname" class="sr-only"> Nom *</label>
                                            <input type="text" class="form-control icon-phone" id="cname" placeholder="Nom"  required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="sr-only">Prenom *</label>
		                					<input type="text" class="form-control" placeholder="Prenom" required>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-12 has-feedback has-feedback-left">
                                            <label class="sr-only">Telephone </label>
                                            <input type="phone" placeholder="Telephone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="sr-only">Identifiant</label>
                                            <input type="text" class="form-control" placeholder="Identifiant" required>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="sr-only icon icon-user">Mot de passe</label>
                                            <input type="password" class="form-control" placeholder="Mot de Passe" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="sr-only">Confirmation du mot de passe</label>
                                            <input type="password" class="form-control" placeholder="Mot de Passe" required>
                                        </div>

                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="sr-only">Email</label>
                                            <input type="text" class="form-control" placeholder="Adresse mail" required>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="sr-only">Ville</label>
                                            <input type="text" class="form-control" placeholder="Ville" required>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="row">
                                        <div class="col-sm-12                       ">
                                         
                                            <select name="country" class="form-control">
                                                <option>Burkina Faso</option>
                                                <option>Côte d'Ivoire</option>
                                                <option>Benin</option>
                                                <option>Mali</option>
                                                <option>Togo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>
                                    <div class="form-footer text-center ">
                                        <button type="submit" class="btn btn-success col-sm-3">
                                            <span>S'enregistrer</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                    </div><!-- End .form-footer -->
                                </form>
                                
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
    
@endsection