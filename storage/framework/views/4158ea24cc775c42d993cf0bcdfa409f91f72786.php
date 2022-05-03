
<?php $__env->startSection('titre'); ?>
    Demarcheur - VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<main class="main">
  <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="">
      <div class="container bg-red">
          <div class="form-box">
              <div class="form-tab">
        
                  <div class="tab-content">
                      <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                          <form action="#">
                            <div class="row">
                              <div class="col-sm-12">
                                  <label class="sr-only">Identifiant</label>
                                  <input type="text" class="form-control" placeholder="Identifiant" required>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6" >
                                <label for="nom" class="sr-only"> Nom *</label>
                                <input type="text" class="form-control icon-phone" id="nom" placeholder="Nom"  required>
                            </div>
                            <div class="col-sm-6">
                                <label class="sr-only">Prenom *</label>
                    <input type="text" class="form-control" placeholder="Prenom" required>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                              <label class="sr-only">Email</label>
                              <input type="text" class="form-control" placeholder="Adresse mail" required>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                            <label class="sr-only">Pays</label>
                            <select name="country" class="form-control">
                                <option>Burkina Faso</option>
                                <option>Côte d'Ivoire</option>
                                <option>Benin</option>
                                <option>Mali</option>
                                <option>Togo</option>
                                <option>Niger</option>
                            </select>
                        </div>
                    </div>                  
                    <div class="row">
                      <div class="col-sm-12 has-feedback has-feedback-left">
                          <label class="sr-only">Ville </label>
                          <input type="text" placeholder="ville" class="form-control">
                      </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-12">
                            <label class="sr-only">Sexe</label>
                            <select name="country" class="form-control">
                              <option>Sexe</option>
                                <option>Masculin</option>
                                <option>Feminin</option>        
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6" >
                      <div class="col-sm-12 has-feedback has-feedback-left">
                          <label class="sr-only">Numero de la CNIB </label>
                          <input type="Text" placeholder="N* CNIB Bxxxxxx" class="form-control">
                      </div>
                  </div>
                </div>
                  
                  <div class="row">
                    <div class="col-sm-12 has-feedback has-feedback-left">
                        <label class="sr-only">Numero de Telephone </label>
                        <input type="phone" placeholder="Numero de Telephone" class="form-control">
                    </div>
                </div>

                 
                
                  <div class="row">
                    <div class="col-sm-12">
                        <label class="sr-only">Sexe</label>
                        <select name="country" class="form-control">
                          <option>Type de Paiement</option>
                            <option>Orange Money</option>
                            <option> Moov Money</option>        
                        </select>
                    </div>
             
                </div>
            
                              <div class="row">
                                  <div class="col-sm-12">
                                      <label class="sr-only">Ville</label>
                                      <input type="text" class="form-control" placeholder="Ville" required>
                                  </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-6" >
                                    <label for="cname" class="sr-only icon icon-user"> Mot de Passe*</label>
                                    <input type="Password" class="form-control icon-phone" id="cname" placeholder="Mot de passe"  required>
                                </div>
                                <div class="col-sm-6">
                                    <label class="sr-only">Confirmation du mot de passe *</label>
                        <input type="password" class="form-control" placeholder="confirmation du mot de passe" required>
                                </div>
                            </div>
                              <div class="form-footer">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                  <label class="custom-control-label" for="register-policy">je suis d'accord avec la <a href="">politique de confidentialité</a> *</label>
                               </div><!-- End .custom-checkbox -->
                              <div>
                                  <button type="submit" class="btn btn-outline-primary-2">
                                      <span>S'enregistrer</span>
                                  </button>
                              </div>
                              </div><!-- End .form-footer -->

                          </form>
                      </div><!-- .End .tab-pane -->
                  </div><!-- End .tab-content -->
              </div><!-- End .form-tab -->
          </div><!-- End .form-box -->
      </div><!-- End .container -->
  </div><!-- End .login-page section-bg -->
</main><!-- End .main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/acceuil/demarcheur.blade.php ENDPATH**/ ?>