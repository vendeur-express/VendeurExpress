
<?php $__env->startSection('titre'); ?>
    Demarcheur - VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="mb-2"></div>
<div class="col"style="text-align: center"  >
    <h2 >veillez completer vos Informations restantes</h2>
</div>
<div class="container" style="border: 1px solid rgb(26, 26, 88); border-radius: 10px; width: 500px; height: 600px; background-color:#5450a0">
    <div class="row">
        <h1></h1>
    </div>
 <form>
     <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Identifiant" required>
          </div>
     </div>
    <div class="row">
        <div class="col">
          <input type="email" class="form-control" placeholder="address email">
        </div>
      </div>
    <div class="row">
      <div class="col rounded">
        <input type="text" class="form-control" placeholder="Nom" required>
      </div>
      
    </div>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nom de la Boutique" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Télephone">
          </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="password" class="form-control" placeholder="mot de passe" required>
          </div>
      </div>
      <div class="row">
        <div class="col">
            <input type="password" class="form-control" placeholder="confirmez le mot de passe" required>
          </div>
      </div>
      <div class="col" > 
        <button style="align-content: center" type="submit" class="btn btn-success">Enregistrer</button>
      </div>
      
  </form>
</div>
<div class="mb-1"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/acceuil/fournisseur.blade.php ENDPATH**/ ?>