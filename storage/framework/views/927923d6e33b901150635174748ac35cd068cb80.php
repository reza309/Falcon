<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SS Home Page</title>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('tools/fontawesome-free-5.12.0-web/css/all.min.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <section class="ht-outer">
        <header class="container-fluid bg-header p-4 p-lg-3 header">
            <nav class="top-nav pt-3 pb-3 ps-3 pe-4">
                <div class="row">
                    <div class="col-lg-2 col-12 col-md-2">
                        <img src="images/falcon-logo.png" alt="Falcon Soft Ltd." class="img img-fluid logo-header">
                        <!-- <img class="img img-fluid logo-header logo-nav" alt="Falcon Soft Ltd." src="images/falcon-logo.png"> -->
                        <!-- <a class="menu-item login-left text-white d-none d-lg-block pt-lg-0" href="#">
                            <i class="fas fa-user-alt"></i>
                            Login
                        </a> -->
                        
                            <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->u_type=='ADM'): ?>
                                    <div class="dropdown menu-item login-left text-white d-none d-lg-block pt-lg-0">
                                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="dropdown-toggle border rounded" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color:#070317 !important; padding:4px">
                                            My Account    
                                            <img src="<?php echo e(asset('images/profile/default.png')); ?>" alt="User image float-start" class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <form action="<?php echo e(route('logout')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                
                                                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                                
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="<?php echo e(route('logout')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="">
                                            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <div class="dropdown menu-item login-left text-white d-none d-lg-block pt-lg-0">
                                        <a href="<?php echo e(route('user.dashboard')); ?>" class="dropdown-toggle border rounded text-decoration-none text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color:#070317 !important; padding:12px">
                                            My Account    
                                            
                                            <?php if($user->profile->images): ?>
                                            <img src="<?php echo e(asset('storage/app/profile')); ?>/<?php echo e($user->profile->images); ?>" alt="Profile Image " class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                            <?php else: ?>
                                            <img src="<?php echo e(asset('images/profile/default.png')); ?>" alt="User image" class="img img-fluid rounded-circle" style="width:32px; height:32px; border:1px solid; padding:3px">
                                            <?php endif; ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>">Profile</a></li>
                                            <li>
                                                <form action="<?php echo e(route('logout')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();closest('form').submit();">logout</a>
                                                
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                            <div class="dropdown menu-item login-left text-white d-none d-lg-block pt-lg-0">
                                <a href="<?php echo e(route('login')); ?>" class="text-white text-decoration-none">
                                <i class="fas fa-user-alt"></i>
                                    Login
                                </a>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <a class="menu-item login-left text-white d-block d-lg-none p-0 float-start" href="#">
                            <img src="images/falcon-logo.png" alt="Falcon Soft Ltd." class="img img-fluid sm-logo">
                        </a>
                        <a href="javascript:void(0);" class="menu-toggler float-end d-block d-md-none d-lg-none">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <div class="col-lg-10 col-12 col-md-10">
                        <div class="menu-container pt-3 mb-3 p-lg-0 p-3 p-md-0">
                            <a class="menu-item menue-sm me-3" href="index.html">
                                Home
                            </a>
                            <a class="menu-item menue-sm me-3 mb-3 active" href="#">Demos</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Features</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Priceing</a>
                            <a class="menu-item menue-sm me-3 mb-3" href="#">Faq</a>
                            <a class="menu-item menue-sm me-3 mb-3 login-right" href="login.html">Login</a>
                            <a class="menu-item menue-sm me-3 me-md-0 mb-3 support" href="#">Support</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </nav>
            <!-- ending nav section -->
        </header>
    </section>
    <?php echo e($slot); ?>

     <!-- start footer section -->
     <footer class="footer-demo mt-lg-3">
        <div class="container-fluid">
            <div class="position-relative" style="z-index: 1;">
                <hr class="p-lg-3">
                <div class="p-lg-0 p-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-block d-lg-none pt-3"></div>
                            <div class="float-start">
                                <img src="images/falcon-logo.png" alt="Falcon icon" class="img img-fluid foot-logo">
                            </div>
                            <span class="text-white-50 d-block mt-lg-3 ps-lg-5">
                                Alright Reserved&copy; Falcon Soft Ltd.
                            </span>
                            <div class="text-white-50 pb-3">
                                Since: December 2021fqaajhjh
                            </div>
                        </div>
                        <!-- ending first col -->
                        <!-- start second col -->
                        <hr class="d-lg-none d-block p-2">
                        <div class="col-lg-4">
                            <h3 class="text-white-50">Products</h3>
                            <hr>
                            <span class="text-white-50">
                                <a href="#" class="text-decoration-none">Web site Theme</a>
                            </span>
                            <br>
                            <span class="text-white-50">
                                <a href="#" class="ps-0 btn btn-link text-decoration-none">Wordpress Theme</a>
                            </span>
                        </div>
                        <!-- ending second col -->
                        <!-- start third col -->
                        <hr class="d-lg-none d-block p-2">
                        <div class="col-lg-4">
                            <h3 class="text-white-50">
                                Contact us
                            </h3>
                            <hr>
                            <span class="d-block text-white-50">
                                Mail: falcon.soft@gmail.com
                            </span>
                            <span class="d-block text-white-50">
                                phone: 0176XXXXXXX
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo e(asset('js/jQuery.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('tools/fontawesome-free-5.12.0-web/js/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/nav.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/preview.js')); ?>"></script>
    
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\falcon\resources\views/layouts/product.blade.php ENDPATH**/ ?>