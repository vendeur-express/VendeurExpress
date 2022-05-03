
<?php $__env->startSection('titre'); ?>
 VENDEUR EXPRESS - Favorie    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Liste de mes souhaits<span>Vex Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">VEX Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <table class="table table-wishlist table-mobile">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Statut du Stock</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-1.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Beige knitted elastic runner shoes</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="stock-col"><span class="in-stock">En stock</span></td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Blue utility pinafore denim dress</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">$76.00</td>
                        <td class="stock-col"><span class="in-stock">En stock</span></td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Orange saddle lock front chain cross body bag</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">$52.00</td>
                        <td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                </tbody>
            </table><!-- End .table table-wishlist -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/favorie.blade.php ENDPATH**/ ?>