


<!-- Start Header Area -->
		<header class="header-area" style="background: #030f21;">
			<!-- Start Nav Area -->
			<div class="container">
			<div class="navbar-area navbar-area-two">
				<div class="mobile-nav">
					<div class="container-fluid">
						<a href="<?php echo e(asset('/')); ?>" class="logo">
							<img src="<?php echo e(asset('frontend/img/main-img/Editvolv.png')); ?>" alt="Logo" style="width:90px;">
						</a>
					</div>
				</div>

				<div class="main-nav">
					<div class="container-fluid">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
								<img src="<?php echo e(asset('frontend/img/main-img/Editvolv.png')); ?>" alt="Logo" style="width:90px;">
							</a>
							
							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="<?php echo e(asset('/')); ?>" class="nav-link active">
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											All PDF Tools
											<!--<i class="bx bx-chevron-down"></i>-->
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</a>

										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="<?php echo e(route('docx-to-pdf.create')); ?>" class="nav-link">Word To PDF</a>
											</li>

											

											<li class="nav-item">
												<a href="<?php echo e(route('jpg-to-pdf.create')); ?>" class="nav-link">JPG To PDF</a>
											</li>

											

											<li class="nav-item">
												<a href="<?php echo e(route('html-to-pdf.create')); ?>" class="nav-link">HTML To PDF</a>
											</li>
                                            
                                            	<li class="nav-item">
												<a href="<?php echo e(route('excel-to-pdf.create')); ?>" class="nav-link">Excel To PDF</a>
											</li>
											
												<li class="nav-item">
												<a href="<?php echo e(route('powerpoint-to-pdf.create')); ?>" class="nav-link">Powerpoint To PDF</a>
											</li>
											
												<li class="nav-item">
												<a href="<?php echo e(route('pdf-to-excel.create')); ?>" class="nav-link">PDF To Excel</a>
											</li>
											
											
												<li class="nav-item">
												<a href="<?php echo e(route('pdf-to-jpg.create')); ?>" class="nav-link">PDF To-JPG</a>
											</li>
												<li class="nav-item">
												<a href="<?php echo e(route('pdf-to-powerpoint.create')); ?>" class="nav-link">PDF To Powerpoint</a>
											</li>
													<li class="nav-item">
												<a href="<?php echo e(route('pdf-to-word.create')); ?>" class="nav-link">PDF To Word</a>
											</li>
										
											
											
										</ul>
									</li>
										<li class="nav-item">
										<a href="<?php echo e(asset('login')); ?>" class="nav-link">Login</a>
									</li>
										<li class="nav-item">
										<a href="<?php echo e(asset('register')); ?>" class="nav-link">Signup</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo e(asset('contact')); ?>" class="nav-link">Contact</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			</div>
			<!-- End Nav Area -->
		</header>
		<!-- End Header Area -->
<?php /**PATH C:\xampp\htdocs\convert to pdf\convert-to-pdf\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>