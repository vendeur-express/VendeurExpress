<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('titre')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
    <style>
        .panel-footer.panel-custom {
        background: #011628;
        color: white;
    }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4 " >
            <div class="header-top " style="background-color:#5450a0 ">
                <div>
                    <div class="header-right" style="text-white">
                        <ul class="top-menu">
                            <li>
                                <ul>
                                    <li> <i class="icon-map-marker"> </i> BP 6586 Ouagadougou 01  |</li>
                                    <li><i class="icon-phone"> </i> +226 78 02 11 57 | </li>
                                    <li><i class="icon-whatsapp"> +226 01 74 74 74 </i></li>
                                    <li><i class="icon-email"> contact@vendeurexpress.com</i></li>
                                    <li class="my-2 my-lg-0">
                                        <a href="#"> <i class="icon-facebook "></i></a>
                                        <a href="#"> <i class="icon-twitter"></i></a>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                        <a href="#"><i class="icon-linkedin"></i></a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--top-header-->
        
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="{{route('client')}}" class="logo">
                            <img src="assets/images/demos/demo-4/logo.png" alt="vendeurexpress" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->
        
                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Rechercer</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
        
                    <div class="header-right">
        
                        <div class="wishlist">
                            <a href="{{route('favorie')}}" title="Favories">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge">0</span>
                                </div>
                                <p>Favorite</p>
                            </a>
                        </div><!-- End .compare-dropdown -->
        
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>Panier</p>
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">chaussures weston</a>
                                            </h4>
        
                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->
        
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
        
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>
        
                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->
        
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->
        
                                <div class="dropdown-cart-total">
                                    <span>Total</span>
        
                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->
        
                                <div class="dropdown-cart-action">
                                    <a href="{{route('panier')}}" class="btn btn-primary">Voir Panier</a>
                                    <a href="{{route('paiement')}}" class="btn btn-outline-primary-2"><span>Commander</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        
            <div class="header-bottom sticky-header" style="background-color: #5450a0">
                <div class="container" style="background-color: #5450a0">
                    <div class="header-left">
                        <div class="dropdown category-dropdown" style="background-color: #5450a0; color:white">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false" data-display="static" title="Browse Categories">
                                Categories Produits <i class="icon-angle-down"></i>
                            </a>
        
                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li><a href="#">Appareils Electronique</a></li>
                                        <li><a href="#">Appareils Menager</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Storage</a></li>
                                        <li><a href="#">Armchairs & Chaises</a></li>
                                        <li><a href="#">Decoration </a></li>
                                        <li><a href="#">Kitchen Cabinets</a></li>
                                        <li><a href="#">Coffee & Tables</a></li>
                                        <li><a href="#">Outdoor Furniture </a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->
        
                    <div class="header-center" >
                        <nav class="main-nav ">
                            <ul class="menu sf-arrows" >
                                <li class="megamenu-container active ">
                                    <a style="color: white" href="{{route('client')}}" >Acceuil</a>
                                </li>
                                <li>
                                    <a style="color: white" href="{{route('vexshop')}}" >Vex shop</a>
                                </li>
                                <li>
                                    <a style="color: white" href="{{route('apropos')}}">A propos</a>
                                </li>
                                <li>
                                    <a style="color: white" href="{{route('blog')}}" >Blog</a>
                                </li>
                                <li>
                                    <a style="color: white" href="{{route('contact')}}" >Contactez-nous</a>
                                </li>
                                <li>
                                    <a style="color: white" href="{{route('inscription')}}"> S'inscrire</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->
        
                    <div class="header-right ">
                        <div class="dropdown category-dropdown "style="background-color: #5450a0;color: white; ">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false" data-display="static" title="Browse Categories">
                                Categories Services <i class="icon-angle-down"></i>
                            </a>
        
                            <div class="dropdown-menu ">
                                <nav class="side-nav " >
                                    <ul class="menu-vertical sf-arrows " >
                                        <li ><a href="#">Appareils Electronique</a></li>
                                        <li><a href="#">Appareils Menager</a></li>
                                        <li><a href="#">ordinateurs</a></li>
                                        <li><a href="#">Storage</a></li>
                                        <li><a href="#">Armchairs & Chaises</a></li>
                                        <li><a href="#">Decoration </a></li>
                                        <li><a href="#">Kitchen Cabinets</a></li>
                                        <li><a href="#">Coffee & Tables</a></li>
                                        <li><a href="#">Outdoor Furniture </a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
       
        @yield('contenu')
        </div>
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        {{-- <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
    
        <div class="mobile-menu-container" style="background-color: #5450a0">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>
    
                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>
                
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="{{route('client')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('vexshop')}}">Shop</a>
                        </li>
                        <li>
                            <a href="{{route('apropos')}}" class="sf-with-ul">A propos</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Blog</a>
    
                        </li>
                        <li>
                            <a href="elements-list.html">Elements</a>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->
    
                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container --> --}}

            <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container"{{--  mobile-menu-light " --}} style="background-color: #5450a0">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>
                
                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Recherche</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>

                <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                    </li>
                    <li class="nav-item">
                        <ul>
                        <li><a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Catégories</a></li>
                        <li><a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Catégories</a></li>
                    </ul>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                        <nav class="mobile-nav">
                            <ul class="mobile-menu">
                                <li class="active">
                                    <a href="{{route('acceuil')}}">ACCEUIL</a>
                                </li>
                                <li>
                                    <a href="{{route('vexshop')}}">VEX SHOP</a>
                                </li>
                                <li>
                                    <a href="{{route('apropos')}}" class="sf-with-ul">A PROPOS</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">BLOG</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">CONTACTEZ-NOUS</a>
            
                                </li>
                                <li>
                                    <a href="{{route('inscription')}}">S'INSCRIRE</a>
                                </li>
                            </ul>
                        </nav><!-- End .mobile-nav -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                        <nav class="mobile-cats-nav">
                            <ul class="mobile-cats-menu">
                                <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                                <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Lighting</a></li>
                                <li><a href="#">Sofas & Sleeper sofas</a></li>
                                <li><a href="#">Storage</a></li>
                                <li><a href="#">Armchairs & Chaises</a></li>
                                <li><a href="#">Decoration </a></li>
                                <li><a href="#">Kitchen Cabinets</a></li>
                                <li><a href="#">Coffee & Tables</a></li>
                                <li><a href="#">Outdoor Furniture </a></li>
                            </ul><!-- End .mobile-cats-menu -->
                        </nav><!-- End .mobile-cats-nav -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->

                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->

        <!-- Plugins JS File -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.hoverIntent.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/superfish.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/bootstrap-input-spinner.js"></script>
        <script src="assets/js/jquery.plugin.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/demos/demo-4.js"></script>
        <footer class="footer panel-footer panel-custom">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget widget-about">
	            				<img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="50">
                                <ul class="widget-list">
	            					<li><a href="#">Devenir un Vendeur Express</a></li>
	            					<li><a href="#">Devenir un Demarcheur</a></li>
	            				</ul>
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title text-white">Nos Formulaires</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Devenir un Vendeur Express</a></li>
	            					<li><a href="#">Devenir un Demarcheur</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title text-white">Informations utiles</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="{{route('apropos')}}">A Propos</a></li>
	            					<li><a href="{{route('vexshop')}}">VEX SHOP</a></li>
	            					<li><a href="{{route('contact')}}">Contactez-nous</a></li>
	            					<li><a href="#">Livraison & Expédition</a></li>
	            					<li><a href="#">Actualités</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title text-white">Nos Services</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Politique de confidentialité</a></li>
	            					<li><a href="#">Condition d'utilisation</a></li>
	            					<li><a href="#">Srvice Clientèle</a></li>
	            					<li><a href="#">Informations de Livraison</a></li>
	            					<li><a href="#">Paiements</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
                        <div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title text-white">NEWSLETTER</h4><!-- End .widget-title -->
                                <div>
                                    <div>
                                        <form action="#">
                                            <input type="email" class="form-control form-control-rounded" placeholder="Sisissez vote email" aria-label="Email Adress" required>
                                            <button class="btn btn-primary" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                        </form>
                                    </div><!-- End .cta-wrapper -->
                                </div><!-- End .col-lg-6 -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->
        </footer><!-- End .footer -->
        <div {{-- class="footer-bottom" --}} style="background-color: #001056">
            <div class="container">
                <div>
                    <p class="footer-copyright"> ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        VENDEUR EXPRESS
                    </p><!-- End .footer-copyright -->
                    <div class="header-right">
                        <figure class="header-right">
                            <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                        </figure><!-- End .footer-payments -->
                    </div>
                </div>
                
                </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </body>
    <!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>