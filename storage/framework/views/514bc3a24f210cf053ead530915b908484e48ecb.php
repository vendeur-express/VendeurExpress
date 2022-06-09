
<?php $__env->startSection('titre'); ?>
    INSCRIPTION | VENDEUR-EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
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
                        <!-- Validation Errors -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form method="POST" action="">
                                    <?php echo csrf_field(); ?>
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
                                <form method="POST" action="register">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select name="Type_de_compte" class="form-control" id="compte">
                                                <option value=" 0">Client</option>
                                                <option value="1">Demarcheur</option>
                                                <option value="2">Fournisseur</option>
                                                <option value="3">Vendeur</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12" id="identifiant">
                                            <input type="text" name="identifiant" class="form-control"
                                                placeholder="Identifiant">
                                        </div>
                                        <div class="col-sm-12" id="code_demarcheur">
                                            <input type="text" name="code_demarcheur" class="form-control"
                                                placeholder="code demarcheur">
                                        </div>

                                        <div class="col-sm-6" id="nom">
                                            <label for="nom" class="sr-only"> Nom *</label>
                                            <input type="text" class="form-control icon-phone" id="nom" placeholder="Nom"
                                                name="nom">
                                        </div>

                                        <div class="col-sm-6" id="prenom">
                                            <label class="sr-only">Prenom *</label>
                                            <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                                        </div>
                                        <div class="col-sm-6" id="email">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Adresse mail">

                                        </div>
                                        <div class="col-sm-6" id="boutique">
                                            <label class="sr-only">Nom du magasin*</label>
                                            <input type="text" class="form-control" placeholder="Nom du magasin"
                                                name="boutique">
                                        </div>

                                        <div class="col-sm-6" id="cnib">
                                            <input type="text" class="form-control" placeholder="N* CNIB" name="cnib">
                                        </div>
                                        <div class="col-sm-6 " id="telephone">
                                            <input type="phone" name="telephone" placeholder="Telephone"
                                                class="form-control">
                                        </div>

                                        <div class="col-sm-6" id="pays-container">
                                            <select name="country" class="form-control pays" id="pays">
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Togo">Togo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 " id="ville">
                                            <input type="text" name="ville" class="form-control" placeholder="Ville">
                                        </div>
                                        <div class="col-sm-12 " id="naissance">
                                            <label class="sr-only">date_naissance </label>
                                            <input type="date" name="date_naissance" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-sm-6" id="sexe">
                                            <select name="sexe" class="form-control pays">
                                                <option value="">Sexe</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Feminin">Feminin</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6" id="paiement-container">
                                            <select name="paiement" class="form-control pays" id="paiement">
                                                <option value="">Type_de_paiement</option>
                                                <option value="0">Virement bancaire</option>
                                                <option value="1">paiement mobile</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6" id="paiement-mobile-container">
                                            <select name="paiement_mobile" class="form-control pays" id="paiement_mobile">
                                                <option value="">paiement mobile</option>
                                                <option value="orange money">orange money</option>
                                                <option value="moov money">moov money</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 " id="mobile-container">
                                            <label class="sr-only">numero orange </label>
                                            <input type="phone" name="mobile" placeholder="Votre numero orange-money"
                                                id="mobile" class="form-control">
                                        </div>

                                        <div class="col-sm-6 " id="bank-container">
                                            <label class="sr-only">numero du compte </label>
                                            <input type="text" name="compte_bancaire" placeholder="N*: du compte-bancaire "
                                                id="bank" class="form-control">
                                        </div>

                                        <div class="col-sm-6" id="pass1-container">
                                            <label class="sr-only icon icon-user">Mot de passe</label>
                                            <input type="password" name="mot_de_passe" id="pass1" class="form-control"
                                                placeholder="Mot de Passe" required>
                                        </div>
                                        <div class="col-sm-6" id="pass2-container">
                                            <input type="password" id="pass2" name="confirm_pass" class="form-control"
                                                placeholder="confirme mot de passe" required>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy"
                                                required>
                                            <label class="custom-control-label" for="register-policy">je suis d'accord avec
                                                la <a href="#">politique de confidentialité</a> *</label>
                                        </div><!-- End .custom-checkbox -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>S'enregistrer</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </div><!-- End .form-footer -->
                                    </div>
                                </form>
                                
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
    <script>
        var code = document.getElementById('code_demarcheur')
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
        var paiement_container = document.getElementById('paiement-container');
        var pays_container = document.getElementById('pays-container');
        var mobile_container = document.getElementById("mobile-container");
        var bank_container = document.getElementById("bank-container");
        var bank = document.getElementById("bank");
        var paiement_mobile_container = document.getElementById("paiement-mobile-container")

        client()

        compte_type.addEventListener('change', function() {
            if (compte_type.value == 0) {
                client()
            } else if (compte_type.value == 1) {
                demarcheur();

            } else if (compte_type.value == 2) {
                fournisseur();
            } else {
                vendeur();
            }
            
        });

        paiement.addEventListener('change', function() {
            if (paiement.value == '0') {

                banks();
            } else if (paiement.value == '1') {
                mobiles();
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
            cnib.style.display = 'none'
            identifiant.style.display = 'block'
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'
            paiement_mobile_container.style.display = 'none'
            bank_container.style.display = 'none'
            mobile_container.style.display = 'none'
            paiement_container.style.display ='none'
            code.style.display ='none'
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
            paiement_container.style.display = 'block'
            pays_container.style.display = 'block'
            paiement_mobile_container.style.display = 'none'
            bank_container.style.display = 'none'
            mobile_container.style.display = 'none'
            code.style.display = 'none'
            
        }

        function fournisseur() {
            email.style.display = 'block'
            code.style.display = 'block';
            ville.style.display = 'block'
            pays.style.display = 'none'
            telephone.style.display = 'block'
            boutique.style.display = 'block'
            nom.style.display = 'block'
            prenom.style.display = 'block'
            sexe.style.display = 'none'
            ville.style.display = 'block'
            naissance.style.display = 'none'
            paiement_container.style.display ='none'
            paiement_container.style.display ='none'
            cnib.style.display = 'none'
            identifiant.style.display = 'block'
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            pays_container.style.display = 'none'
            bank_container.style.display = 'none'
            paiement_mobile_container.style.display = 'none';
            mobile_container.style.display = 'none';
            
            
        }

        function vendeur() {
            email.style.display = 'block'
            code.style.display ='none'
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
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'
            bank_container.style.display = 'none'
           
            

        }

        function banks() {
            paiement_mobile_container.style.display = 'none'
            mobile_container.style.display = 'none'
            bank_container.style.display = 'block'
        }

        function mobiles() {
            mobile_container.style.display = 'block'
            paiement_mobile_container.style.display = 'block'
            bank_container.style.display = 'none'

        }


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
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'
            orange_container.style.display = 'none'
            moov_container.style.display = 'none'
            bank_container.style.display = 'none'

        }

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
            pass1.style.display = 'block'
            pass2.style.display = 'block'
            paiement.style.display = 'none'
            pays_container.style.display = 'none'

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/client/inscription.blade.php ENDPATH**/ ?>