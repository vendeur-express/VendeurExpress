
<?php $__env->startSection('titre'); ?>
    ARTICLE | VENDEUR EXPRESS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<div class="content-wrapper">
    <h1>ARTICLE</h1>
    <div class="col-lg-6">
        <form action="#" class="contact-form mb-3">
            <div class="row">
                <div class="col-sm-12">
                    <label for="tpost" class="sr-only">Titre du post</label>
                    <input type="text" class="form-control" id="tpost" placeholder="Titre du post*" required>
                </div><!-- End .col-sm-6 -->

            </div><!-- End .row -->
<div class="mb-4"></div>
            <label for="post" class="sr-only">contenu du post</label>
            <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="contenu du post *"></textarea>

            <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                <span>Envoyez</span>
                <i class="icon-long-arrow-right"></i>
            </button>
        </form><!-- End .contact-form -->
    </div><!-- End .col-lg-6 -->
</div><!-- End .row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/superadmin/article.blade.php ENDPATH**/ ?>