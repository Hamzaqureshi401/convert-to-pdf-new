<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
        
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">-->
      <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.min.css')); ?>">
		<!-- Boxicons Min CSS --> 
		<!--<link rel="stylesheet" href="<?php echo e(asset('frontend/css/boxicons.min.css')); ?>"> -->
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.min.css')); ?>"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/flaticon.css')); ?>">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/meanmenu.min.css')); ?>">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/nice-select.min.css')); ?>">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/odometer.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/main-style/style.css')); ?>">
		<!-- Style CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
		<!-- costume CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/costume-style.css')); ?>">
		
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/main-style/costume-style.css')); ?>">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo e(asset('frontend//img/main-img/Editvolv.png')); ?>">

		
		
		<script id="messenger-widget-b" src="https://cdn.botpenguin.com/website-bot.js" defer>669bcd6699f33102a0ab616e,669bccbfa96be68837567b1e</script>
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-flued">
        <?php echo $__env->yieldContent('frontend.content'); ?>
    </div>
    <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
      <!-- Jquery Min JS -->
        <!--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/dist/boxicons.min.js"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Meanmenu Min JS -->
		<script src="<?php echo e(asset('frontend/js/meanmenu.min.js')); ?>"></script>
        <!-- Wow Min JS -->
        <script src="<?php echo e(asset('frontend/js/wow.min.js')); ?>"></script>
        <!-- Owl Carousel Min JS -->
		<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
        <!-- Nice Select Min JS -->
		<script src="<?php echo e(asset('frontend/js/nice-select.min.js')); ?>"></script>
        <!-- Magnific Popup Min JS -->
		<script src="<?php echo e(asset('frontend/js/magnific-popup.min.js')); ?>"></script>
		<!-- Jarallax Min JS --> 
		<script src="<?php echo e(asset('frontend/js/jarallax.min.js')); ?>"></script>
		<!-- Appear Min JS --> 
        <script src="<?php echo e(asset('frontend/js/appear.min.js')); ?>"></script>
		<!-- Odometer Min JS --> 
		<script src="<?php echo e(asset('frontend/js/odometer.min.js')); ?>"></script>
		<!-- Form Validator Min JS -->
		<script src="<?php echo e(asset('frontend/js/form-validator.min.js')); ?>"></script>
		<!-- Contact JS -->
		<script src="<?php echo e(asset('frontend/js/contact-form-script.js')); ?>"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="<?php echo e(asset('frontend/js/ajaxchimp.min.js')); ?>"></script>
        <!-- Custom JS -->
		<script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
		<script src="<?php echo e(asset('js/script.js')); ?>"></script>
       
    <?php echo $__env->yieldContent('scripts'); ?>
    
  
        <script>
		const dropArea = document.querySelector(".drop_box"),
			button = dropArea.querySelector("button"),
			dragText = dropArea.querySelector("header"),
			input = dropArea.querySelector("input");
		let file;
		var filename;

		button.onclick = () => {
			input.click();
		};

		input.addEventListener("change", function (e) {
			var fileName = e.target.files[0].name;
			let filedata = `
    <form action="" method="post">
    <div class="form">
    <h4>${fileName}</h4>
    <input type="email" placeholder="Enter email upload file">
    <button class="btn">Upload</button>
    </div>
    </form>`;
			dropArea.innerHTML = filedata;
		});

	</script>
   
</body>
</html>

<?php /**PATH C:\xampp\htdocs\editevolv\resources\views/frontend/layouts/main.blade.php ENDPATH**/ ?>