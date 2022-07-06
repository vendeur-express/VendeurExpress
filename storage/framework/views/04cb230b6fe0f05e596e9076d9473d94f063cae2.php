
<?php $__env->startSection('titre'); ?>
    ARTICLE | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('posts.store')); ?>" class="contact-form mb-3" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
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
                                <input class="form-control form-control-lg" name="imagepost" id="formFileLg" type="file">
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
                    <th>UserName</th>
                    <th>Actions</th>
                
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->label_pos); ?> </td>
                    <th><?php echo e($item->dsc_pos); ?></th>
                    <th><?php echo e($item->image_id); ?></th>
                    <th><?php echo e($item->created_at); ?></th>
                    <th><?php echo e($item->user_id); ?></th>
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
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <tr>
                    <td colspan="7"> pas de post disponible </td>
                  </tr>
              
                  <?php endif; ?>
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Media</th>
                        <th>Date</th>
                        <th>UserName</th>
                        <th>Actions</th>
                       
                        </tr>
                  </tfoot>
                </table>
              </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/article.blade.php ENDPATH**/ ?>