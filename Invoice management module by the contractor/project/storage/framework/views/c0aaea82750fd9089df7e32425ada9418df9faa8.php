<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>System fakturowania</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset ('css/styles.css')); ?>" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href=" <?php echo e(asset ('css/heading.css')); ?>">
        <link rel="stylesheet" href=" <?php echo e(asset ('css/body.css')); ?>">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?php echo e(url('/')); ?>">System fakon</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('invoices.index')); ?>">Lista faktur</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('invoices.create')); ?>">Dodaj fakture</a></li>                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('contractors.index')); ?>">Lista kontrahentów</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('contractors.create')); ?>">Dodaj kontrahenta</a></li>                        </li>
                    
                    
                    </ul>
                </div>
            </div>
        </nav>
        
        <?php echo $__env->yieldContent('content'); ?>
        
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">Kontakt</h4>
                        <p class="pre-wrap lead mb-0">Slakos@o2.pl

                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">Sławomir Kosior</h4>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">System zarządzania fakturami</h4>
                        <p class="pre-wrap lead mb-0">System umożliwia zarządzanie fakturami dla poszczególnych kontrahentów</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Designed by Sławomir Kosior</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src=" <?php echo e(asset ('assets/mail/jqBootstrapValidation.js')); ?>"></script>
        <script src=" <?php echo e(asset ('assets/mail/contact_me.js')); ?>"></script>
        <!-- Core theme JS-->
        <script src=" <?php echo e(asset ('js/scripts.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Blog\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>