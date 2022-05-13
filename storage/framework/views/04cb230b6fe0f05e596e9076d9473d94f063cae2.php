
<?php $__env->startSection('titre'); ?>
    ARTICLE | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<h1 class="text-center">ARTICLE</h1
<div class="mb-3"></div>
<div class="row">
    <div class="content-wrapper main d-flex justify-content-center bg-white">
    
    <div class="col-lg-6 margin-1">
        <form action="#" class="contact-form mb-3">
            <div class="row">
                <div class="col-sm-12">
                    <label for="tpost" class="sr-only">Titre du post</label>
                    <input type="text" class="form-control" id="tpost" placeholder="Titre du post*" required>
                </div><!-- End .col-sm-6 -->
            </div><!-- End .row -->
            <div class="mb-2"></div>
            <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="contenu du post *"></textarea>
            <div class="mb-2"></div>
            <div> 
                <input class="form-control form-control-lg" id="formFileLg" type="file">
              </div>
            <div class="mb-2"></div>
            <button type="submit" class="btn btn-outline-success btn-minwidth-sm">
                <span>Envoyez</span>
                <i class="icon-long-arrow-right"></i>
            </button>
        </form><!-- End .contact-form -->
    </div><!-- End .col-lg-6 -->
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
 </div><!-- End .row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/article.blade.php ENDPATH**/ ?>