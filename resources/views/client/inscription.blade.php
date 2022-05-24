@extends('layouts.client.app')
@section('titre')
    INSCRIPTION | VENDEUR-EXPRESS
@endsection
@section('contenu')
    <main class="main">
        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17 "
            style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                    aria-controls="signin-2" aria-selected="false">Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                    role="tab" aria-controls="register-2" aria-selected="true">S'inscrire</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form  method="POST" action="{{route('')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="singin-email-2">Nom d'utilisateur ou adresse e-mail *</label>
                                        <input type="text" class="form-control" id="singin-email-2" name="singin-email"
                                            required>
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="singin-password-2">Mot de passe *</label>
                                        <input type="password" class="form-control" id="singin-password-2"
                                            name="singin-password" required>
                                    </div><!-- End .form-group -->
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>CONNEXION</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember-2">
                                            <label class="custom-control-label" for="signin-remember-2">Me souvenir
                                                de</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Mot de passe oublié?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">Ou connectez-vous avec</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                aria-labelledby="register-tab-2">
                                <form action="#">
<<<<<<< Updated upstream
                                    @csrf
                                    <div class="row" >
=======
                                    <div class="row">
>>>>>>> Stashed changes
                                        <div class="col-sm-12">
                                            <select name="Type de compte" class="form-control" id="compte">
                                                <option value="">Client</option>
                                                <option value="0">Demarcheur</option>
                                                <option value="1">Fournisseur</option>
                                                <option value="2">Vendeur</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12" id="identifiant">
<<<<<<< Updated upstream
                                            <input type="text" name="identifiant" class="form-control" placeholder="Identifiant" required>
                                          </div>
                                  
                                     
                                        <div class="col-sm-6" id="nom">
                                            <label for="cname" class="sr-only"> Nom *</label>
                                            <input type="text" class="form-control icon-phone" id="nom" placeholder="Nom"  required>
=======
                                            <input type="text" class="form-control" placeholder="Identifiant" required>
                                        </div>


                                        <div class="col-sm-6" id="nom">
                                            <label for="cname" class="sr-only"> Nom *</label>
                                            <input type="text" class="form-control icon-phone" id="cname" placeholder="Nom"
                                                required>
>>>>>>> Stashed changes
                                        </div>

                                        <div class="col-sm-6" id="prenom">
                                            <label class="sr-only">Prenom *</label>
<<<<<<< Updated upstream
		                					<input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                                        </div>
                                                            
                                        <div class="col-sm-6" id="email">
                                            <label class="sr-only">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Adresse mail" required>
                                        
=======
                                            <input type="text" class="form-control" placeholder="Prenom" required>
                                        </div>



                                        <div class="col-sm-6" id="email">
                                            <label class="sr-only">Email</label>
                                            <input type="text" class="form-control" placeholder="Adresse mail" required>

>>>>>>> Stashed changes
                                        </div>

                                        <div class="col-sm-6" id="boutique">
                                            <label class="sr-only">Nom du magasin*</label>
<<<<<<< Updated upstream
		                					<input type="text" emaclass="form-control" placeholder="Nom du magasin" required>
=======
                                            <input type="text" class="form-control" placeholder="Nom du magasin" required>
>>>>>>> Stashed changes
                                        </div>

                                        <div class="col-sm-6" id="cnib">
                                            <input type="text" class="form-control" placeholder="N* CNIB" required>
                                        </div>
                                        <div class="col-sm-6 " id="telephone">
                                            <label class="sr-only">Telephone </label>
                                            <input type="phone" placeholder="Telephone" class="form-control">
                                        </div>

                                        <div class="col-sm-6" id="pays-container">
                                            <select name="country" class="form-control pays" id="pays">
                                                <option>Burkina Faso</option>
                                                <option>Côte d'Ivoire</option>
                                                <option>Benin</option>
                                                <option>Mali</option>
                                                <option>Togo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 " id="ville">
                                            <label class="sr-only">Ville</label>
                                            <input type="text" class="form-control" placeholder="Ville" required>
<<<<<<< Updated upstream
                                        </div> 
                                        <div class="col-sm-12 " id="naissance">
                                            <label class="sr-only">date_naissance </label>
                                            <input type="date" placeholder="" class="form-control">
                                        </div>  
                                     <div class="col-sm-6" id="sexe">
                                            <select name="sexe" class="form-control pays" >
                                                <option >Sexe</option>
=======
                                        </div>


                                        <div class="col-sm-12 " id="naissance">
                                            <label class="sr-only">date_naissance </label>
                                            <input type="date" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-sm-6" id="sexe">
                                            <select name="sexe" class="form-control pays">
                                                <option>Sexe</option>
>>>>>>> Stashed changes
                                                <option>Masculin</option>
                                                <option>Feminin</option>
                                            </select>
                                        </div>
<<<<<<< Updated upstream
                                           <div class="col-sm-6" id="paiement-container">
                                                 <select name="paiement" class="form-control pays" id="paiement">
                                                    <option >Type_de_paiement</option>
                                                       <option value="0">Virement bancaire</option>
                                                          <option value="1">paiement mobile</option>
                                                            </select>
                                                              </div>
                                                              <div class="col-sm-6" id="paiement-mobile-container">
                                                                <select name="paiement" class="form-control pays" id="paiement_mobile">
                                                                   <option >paiement mobile</option>
                                                                      <option value="0">orange money</option>
                                                                         <option value="1">moov money</option>
                                                                           </select>
                                                                             </div>
                                                                             <div class="col-sm-6 " id="orange">
                                                                                <label class="sr-only">numero orange </label>
                                                                                <input type="phone" placeholder="Votre numero orange-money" class="form-control">
                                                                            </div> 
                                                                            <div class="col-sm-6 " id="moov">
                                                                                <label class="sr-only">numero orange </label>
                                                                                <input type="phone" placeholder="Votre numero moov-money" class="form-control">
                                                                            </div> 
                                                                            <div class="col-sm-6 " id="bank">
                                                                                <label class="sr-only">numero du compte </label>
                                                                                <input type="phone" placeholder="N*: du compte-bancaire " class="form-control">
                                                                            </div> 

                                                                <div class="col-sm-6" id="pass1-container">
                                                                  <label class="sr-only icon icon-user">Mot de passe</label>
                                                                    <input type="password" id="pass1" class="form-control" placeholder="Mot de Passe" required>
                                                                     </div>
                                                                    <div class="col-sm-6" id="pass2-container">
                                                                        <label class="sr-only">Confirmation du mot de passe</label>
                                                                        <input type="password" id="pass2" class="form-control" placeholder="Mot de Passe" required>
                                                                    </div>
                                              
                                     <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                        <label class="custom-control-label" for="register-policy">je suis d'accord avec la <a href="#">politique de confidentialité</a> *</label>
                                     </div><!-- End .custom-checkbox -->   
                                       <div class="form-footer">
=======
                                        <div class="col-sm-6" id="paiement-container">
                                            <select name="paiement" class="form-control pays" id="paiement">
                                                <option>Type_de_paiement</option>
                                                <option>Orange</option>
                                                <option>orange</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6" id="pass1-container">
                                            <label class="sr-only icon icon-user">Mot de passe</label>
                                            <input type="password" id="pass1" class="form-control"
                                                placeholder="Mot de Passe" required>
                                        </div>

                                        <div class="col-sm-6" id="pass2-container">
                                            <label class="sr-only">Confirmation du mot de passe</label>
                                            <input type="password" id="pass2" class="form-control"
                                                placeholder="Mot de Passe" required>
                                        </div>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy"
                                                required>
                                            <label class="custom-control-label" for="register-policy">je suis d'accord avec
                                                la <a href="#">politique de confidentialité</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                        <div class="form-footer">
>>>>>>> Stashed changes
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>S'enregistrer</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </div><!-- End .form-footer -->
                                    </div>
                                </form>
                                {{-- <div class="form-choice">
                                    <p class="text-center">Ou s'enregistrer avec</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice --> --}}
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
    <script>
        var email = document.getElementById('email')
        var ville = document.getElementById('ville')
        var pays = document.getElementById('pays')
        var pass = document.getElementById('pass')
        var prenom = document.getElementById('prenom')
        var nom = document.getElementById('nom')
        var boutique = document.getElementById('boutique')
        var identifiant = document.getElementById('identifiant')
        var telephone = document.getElementById('telephone')
        var cnib = document.getElementById('cnib')
        var naissance = document.getElementById('naissance')
        var sexe = document.getElementById('sexe')
        var paiement = document.getElementById('paiement')
        var compte_type = document.getElementById('compte');
        var pass1 = document.getElementById('pass1-container');
        var pass2 = document.getElementById('pass2-container');
        var paiement = document.getElementById('paiement-container');
        var pays_container = document.getElementById('pays-container');

<<<<<<< Updated upstream
    var email=document.getElementById('email')
    var ville=document.getElementById('ville')
    var pays=document.getElementById('pays')
    var pass=document.getElementById('pass')
    var prenom=document.getElementById('prenom')
    var nom=document.getElementById('nom')
    var boutique=document.getElementById('boutique')
    var identifiant=document.getElementById('identifiant')
    var telephone=document.getElementById('telephone')
    var cnib=document.getElementById('cnib')
    var naissance=document.getElementById('naissance')
    var sexe=document.getElementById('sexe')
    var paiement=document.getElementById('paiement')
    var compte_type = document.getElementById('compte');
    var pass1 = document.getElementById('pass1-container');
    var pass2 = document.getElementById('pass2-container');
    var paiement = document.getElementById('paiement-container');
    var pays_container = document.getElementById('pays-container');
    var orange = document.getElementById("orange")
    var moov = document.getElementById("moov")
    var bank = document.getElementById("bank")
    var paiement_mobile_container = document.getElementById("paiement-mobile-container")

    
    client()
        compte_type.addEventListener('change',function(){
        if(compte_type.value==""){
       client()
        }
        else if(compte_type.value == 0){
            demarcheur()
        }
        else if (compte_type.value == 1){
            fournisseur()
        }
        else{
            vendeur()
        }
        if (paiement.value==0) {
            bancaire()
        }else{
            mobile()
        }

        });

    function client() {
        email.style.display='block'
        ville.style.display='none'
        pays.style.display='none'
        telephone.style.display='block'
        boutique.style.display='none'
        nom.style.display='block'
        prenom.style.display='block'
        sexe.style.display='none'
        ville.style.display='none'
        naissance.style.display='none'
        paiement.style.display='none' 
        cnib.style.display='none'
        identifiant.style.display='block'
        pass1.style.display='block'
        pass2.style.display='block'
        paiement.style.display='none'
        pays_container.style.display='none'
        orange.style.display='none'
        moov.style.display='none'
        bank.style.display='none'
        paiement_mobile_container.style.display='none'
        orange.style.display='none'
        moov.style.display='none'
        bank.style.display='none'


    }
    function demarcheur() {
        email.style.display='block'
        ville.style.display='block'
        pays.style.display='block'
        telephone.style.display='block'
        boutique.style.display='block'
        nom.style.display='block'
        prenom.style.display='block'
        sexe.style.display='block'
        ville.style.display='block'
        naissance.style.display='block'
        paiement.style.display='block'
        cnib.style.display='block'
        identifiant.style.display='block'
        pass1.style.display='block'
        pass2.style.display='block'
        paiement.style.display='block'
        pays_container.style.display='block'
        orange.style.display='none'
        moov.style.display='none'
        bank.style.display='none'
        paiement_mobile_container.style.display='none'
        orange.style.display='none'
        moov.style.display='none'
        bank.style.display='block'

    }
    function fournisseur() {
        email.style.display='block'
        ville.style.display='block'
        pays.style.display='none'
        telephone.style.display='block'
        boutique.style.display='block'
        nom.style.display='block'
        prenom.style.display='block'
        sexe.style.display='none'
        ville.style.display='block'
        naissance.style.display='none'
        paiement.style.display='none'
        cnib.style.display='none'
        identifiant.style.display='block'
        pass1.style.display='block'
        pass2.style.display='block'
        paiement.style.display='none'
        pays_container.style.display='none'
        orange_container.style.display='none'
        moov_container.style.display='none'
        bank_container.style.display='none'
        orange.style.display='none'
        bank.style.display='none'
        moov.style.display='none'      
    }
    function vendeur() {
        email.style.display='block'
        ville.style.display='block'
        pays.style.display='block'
        telephone.style.display='block'
        boutique.style.display='none'
        nom.style.display='block'
        prenom.style.display='block'
        sexe.style.display='block'
        ville.style.display='block'
        naissance.style.display='block'
        paiement.style.display='block'
        cnib.style.display='block'
        identifiant.style.display='block'
        pass1.style.display='block'
        pass2.style.display='block'
        paiement.style.display='none'
        pays_container.style.display='none'
        orange_container.style.display='none'
        moov_container.style.display='none'
        bank_container.style.display='none'
        orange.style.display='none'
        bank.style.display='none'
        moov.style.display='none'
        
    }
    function bank() {
        orange_container.style.display='none'
        moov_container.style.display='none'
        bank_container.style.display='block'
        orange.style.display='none'
        bank.style.display='block'
        moov.style.display='none'
    }
    function mobile() {
        orange_container.style.display='none'
        moov_container.style.display='none'
        bank_container.style.display='none'
        orange.style.display='block'
        bank.style.display='none'
        moov.style.display='block'
        
    }
 </script>
=======
        client()
        compte_type.addEventListener('change', function() {
            if (compte_type.value == "") {
                client()
            } else if (compte_type.value == 0) {
                demarcheur()
            } else if (compte_type.value == 1) {
                fournisseur()
            } else {
                vendeur()
            }

        });

        function client() {
            email.style.display = 'block'
            ville.style.display = 'none'
            pays.style.display = 'none'
            telephone.style.display = 'block'
            boutique.style.display = 'none'
            nom.style.display = 'block'
            prenom.style.display = 'block'
            sexe.style.display = 'none'
            ville.style.display = 'none'
            naissance.style.display = 'none'
            paiement.style.display = 'none'
            cnib.style.display = 'none'
            identifiant.style.display = 'block'
            pass1.style.display = 'none'
            pass2.style.display = 'none'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'


        }

        function demarcheur() {
            email.style.display = 'block'
            ville.style.display = 'block'
            pays.style.display = 'block'
            telephone.style.display = 'block'
            boutique.style.display = 'block'
            nom.style.display = 'block'
            prenom.style.display = 'block'
            sexe.style.display = 'block'
            ville.style.display = 'block'
            naissance.style.display = 'block'
            paiement.style.display = 'block'
            cnib.style.display = 'block'
            identifiant.style.display = 'block'
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            paiement.style.display = 'block'
            pays_container.style.display = 'block'

        }

        function fournisseur() {
            email.style.display = 'block'
            ville.style.display = 'block'
            pays.style.display = 'none'
            telephone.style.display = 'block'
            boutique.style.display = 'block'
            nom.style.display = 'block'
            prenom.style.display = 'block'
            sexe.style.display = 'none'
            ville.style.display = 'block'
            naissance.style.display = 'none'
            paiement.style.display = 'none'
            cnib.style.display = 'none'
            identifiant.style.display = 'block'
            pass1.style.display = 'none'
            pass2.style.display = 'none'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'
        }
>>>>>>> Stashed changes

        function vendeur() {
            email.style.display = 'block'
            ville.style.display = 'block'
            pays.style.display = 'block'
            telephone.style.display = 'block'
            boutique.style.display = 'none'
            nom.style.display = 'block'
            prenom.style.display = 'block'
            sexe.style.display = 'block'
            ville.style.display = 'block'
            naissance.style.display = 'block'
            paiement.style.display = 'block'
            cnib.style.display = 'block'
            identifiant.style.display = 'block'
            pass1.style.display = 'none'
            pass2.style.display = 'none'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'

        }
    </script>
@endsection
