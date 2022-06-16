<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo $__env->yieldContent('titre'); ?></title>
  <?php echo $__env->yieldContent('style'); ?>
  <link rel="stylesheet" href="admin/dist/css/image-uploader.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
   <!-- jQuery -->
   <script src="admin/plugins/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
   
   <script src="admin/dist/js/image-uploader.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('client')); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('contact')); ?>" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mon compte</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="has-treeview">
            <a href="<?php echo e(route('produits')); ?>" class="nav-link">
              <i class="fas fa-dice-d6 nav-icon"></i>
              <p>
                Produits
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('attribut')); ?>" class="nav-link">
              <i class="fas fa-dice-d6 nav-icon"></i>
              <p>
                Attributs
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('commande')); ?>" class="nav-link">
              <i class="fas fa-shopping-cart nav-icon"></i>
              <p>
                Commandes
                
              </p>
            </a>
          </li>
          
          <li class="has-treeview">
            <a href="<?php echo e(route('rembourser')); ?>" class="nav-link">
              <i class="fas fa-search-dollar nav-icon"></i>
              <p>
                Rembourser
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('reglage')); ?>" class="nav-link">
              <i class="far fa-sun nav-icon"></i>
              <p>
                Réglages
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('coupon')); ?>" class="nav-link">
              <i class="fas fa-gift nav-icon"></i>
              <p>
                Coupons
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('magasin')); ?>" class="nav-link">
              <i class="fas fa-store-alt nav-icon"></i>
              <p>
                Magasin Vendeurs
                
              </p>
            </a>
          </li>

          <li class="has-treeview">
            <a href="<?php echo e(route('retrait')); ?>" class="nav-link">
              <i class="far fa-credit-card nav-icon"></i>
              <p>
                Retrait
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('rapport')); ?>" class="nav-link">
              <i class="fas fa-chart-pie nav-icon"></i>
              <p>
                Rapports
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="<?php echo e(route('avis')); ?>" class="nav-link">
              <i class=" 	fas fa-comment nav-icon"></i>
              <p>
                Avis
                
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Deconnexion
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-folder"></i>
              <p>
                Catégories
              </p>
            </a>
          </li>
          <li class="has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-folder-plus"></i>
              <p>
                Ajouter catégories
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <br/>
  <div class="content-wrapper">
    <section class="content">
      <?php echo $__env->yieldContent('contenu'); ?>
    </section>
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
        
        <!-- jQuery -->
        <script src="admin/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <!-- <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script> -->
        <!-- Bootstrap 4 -->
        <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="admin/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        
        <!-- JQVMap -->
        <script src="admin/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="admin/plugins/moment/moment.min.js"></script>
        <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="admin/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        
        <!-- AdminLTE for demo purposes -->
        <script src="admin/dist/js/demo.js"></script>
        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html><?php /**PATH C:\Users\VEX\vendeurexpress-app\resources\views/layouts/admin/app.blade.php ENDPATH**/ ?>