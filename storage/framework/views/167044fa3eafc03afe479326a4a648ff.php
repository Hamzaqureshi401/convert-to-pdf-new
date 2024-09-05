<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
         
        <!-- Favicons -->
        <link href="backend/img/favicon.png1" rel="icon">
        <link href="backend/img/apple-touch-icon.png1" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
 href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
 rel="stylesheet">

     <!-- Vendor CSS Files -->
     <link href="<?php echo e(URL::asset('backend/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(URL::asset('backend/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

     <link href="<?php echo e(URL::asset('backend/css/style.css')); ?>" rel="stylesheet">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main id="main" class="main">
                <?php echo e($slot); ?>

            </main>
        </div>

        <!-- ======= Footer ======= -->
       <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>Edite Volv</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">Edite Volv</a>
        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
     class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="<?php echo e(URL::asset('backend/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/chart.js/chart.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/echarts/echarts.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/quill/quill.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/tinymce/tinymce.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('backend/vendor/php-email-form/validate.js')); ?>"></script>

      <!-- Template Main JS File -->
      <script src="<?php echo e(URL::asset('backend/js/main.js')); ?>"></script>
      
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\convert to pdf\convert-to-pdf\resources\views/layouts/app.blade.php ENDPATH**/ ?>