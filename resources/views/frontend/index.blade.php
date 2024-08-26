@extends('frontend.layouts.main')

@section('title', 'Home Page')

@section('frontend.content')

	<section class="section" style="margin-top:90px">
	    <marquee> -: Edit your PDF services specialists :- &nbsp; &nbsp; &nbsp; -: Edit your PDF services specialists :- &nbsp; &nbsp; &nbsp; -: Edit your PDF services specialists :-
	    &nbsp; &nbsp; &nbsp; -: Edit your PDF services specialists :- &nbsp; &nbsp; &nbsp; -: Edit your PDF services specialists :-
	    </marquee>
		<!-- HOME SECTION -->
		<div class="container ">
			<div class="row">
				<div class="col-md-6">
					<div class="we-are-content">
						<span class="top-title">We are</span>
						<h2>Edit your PDF services specialists we are experts in:</h2>
						<ul>
							<li>
								<i class="bx bx-check"></i>
								Safe water condition
							</li>
							<li>
								<i class="bx bx-check"></i>
								PDF Converter maintenance
							</li>
							<li>
								<i class="bx bx-check"></i>
								Commercial PDF Converter work
							</li>
							<li>
								<i class="bx bx-check"></i>
								CPO licensed with chemical knowledge
							</li>
							<li>
								<i class="bx bx-check"></i>
								Renovations and refurbishment
							</li>
							<li>
								<i class="bx bx-check"></i>
								Leak detection
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 upoladpdf">
					<div class="pdf-icon">
						<!-- <img class="img-main" src="{{ asset('frontend/img/main-img/main-picture.png') }}" alt="PDF Icon" /> -->
						<img class="icon img-excel" src="{{ asset('frontend/img/main-img/intro-animation-excel.png') }}"
							alt="PDF Icon" />
						<img class="icon img-img" src="{{ asset('frontend/img/main-img/intro-animation-image.png') }}" alt="PDF Icon" />
						<img class="icons img-ppt" src="{{ asset('frontend/img/main-img/intro-animation-ppt.png') }}" alt="PDF Icon" />
						<img class="icons img-word" src="{{ asset('frontend/img/main-img/intro-animation-word.png') }}" alt="PDF Icon" />
						<!--{{ asset('css/bootstrap.min.css') }}-->
					</div>
					{{-- <div class="card"> --}}
						{{-- <div class="drop_box">
							<header>
								<h4>Select File here</h4>
							</header>
							<p>Files Supported: PDF, TEXT, DOC , DOCX</p>
							<input type="file" hidden accept=".doc,.docx,.pdf" id="fileID" style="display:none;">
							<button class="btn">Choose File</button>
						</div> --}}
						{{-- <div class="upload-area" id="uploadfile">
							<h2>Drag and Drop your files here</h2>
							<input type="file" id="fileInput" multiple>
							<button id="uploadButton">Upload Files</button>
						</div> --}}
						<form method="post" action="#" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="e7aJVzHBV0dJzCF5hS5ILcsM9jgbO6O1C91lkvSB" autocomplete="off">
							<div class="row" style="background: #fff;">
							  <div class="col-md-12 mb-3">
								<div class="artisan-uploader bg-light rounded uploader-file-uploader" style="background-color: #fff !important;">
								  <input id="file-uploader" type="file" name="image" accept="image/*">
								  <div class="bg-priamary p-2 add-more d-none position-absolute">
									<label class="btn btn-primary btn-pill" for="file-uploader">+</label>
								  </div>
								  <label for="file-uploader" class="file-drag">
									<div class="uploader-wrapper">
									  <i class="an an-upload-image"></i>
									  <h3>Drop Image File Here</h3>
									  <div class="uploader-extensions mb-3">
										<span class="badge text-uppercase" style="color:#333">.jpg</span>
										<span class="badge text-uppercase" style="color:#333">.jpeg</span>
									  </div>
									  <p>Make "image" files easy to read by converting them to DOCX.</p>
									  <span class="btn btn-dark file-upload-btn">Select a File</span>
									</div>
									<div class="files-grid"></div>
								  </label>
								</div>
							  </div>
							</div>
							{{-- <div class="row">
							  <div class="col-md-12">
								<div class="text-end">
								  <button type="submit" class="btn btn-outline-primary rounded-pill">Convert Now</button>
								</div>
							  </div>
							</div> --}}
						  </form>
					{{-- </div> --}}
					<div class="integration-icons">
						<img src="{{ asset('frontend/img/main-img/box-logo.svg') }}" alt="Box Icon" />
						<img src="{{ asset('frontend/img/main-img/gdrive-logo.svg') }}" alt="Google Drive Icon" />
						<img src="{{ asset('frontend/img/main-img/dropbox-logo.svg') }}" alt="Dropbox Icon" />
						<img src="{{ asset('frontend/img/main-img/link-logo.svg') }}" alt="Link Icon" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" style="background: #e2e2e2;">
		<div class="container mt-5">
			<div class="row">

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card py-4 px-lg-5 h-100">
						<div class="card-body d-flex flex-column">
							<!--<div class="text-center">-->
							<!--	<img src="#" class="img-fluid  mb-5" alt="Websearch">-->
							<!--</div>-->

							<div class="card-title mb-4 text-center fs-2"><h4>Personal Package</h4></div>
							<div class="pricing">
								<ul class="list-unstyled">
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">1 Member Only</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Available Storage 100GB</span>
									</li>
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹7</span>/Hours
							</div>
							<div class="text-center"><button type="button" class="btn btncolor">Choose Plan</button>
							</div>

						</div>
					</div>

				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card py-4 px-lg-5 h-100">
						<div class="card-body d-flex flex-column">
							<!--<div class="text-center">-->
							<!--	<img src="#" class="img-fluid  mb-5" alt="Websearch">-->
							<!--</div>-->

							<div class="card-title mb-4 text-center fs-2"><h4>Partner Package</h4></div>
							<div class="pricing">
								<ul class="list-unstyled">
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">2-3 Members</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Available Storage 500GB</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Free Hosting</span>
									</li>
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹11</span>/Day
							</div>
							<div class="text-center"><button type="button" class="btn btncolor">Choose Plan</button>
							</div>

						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card py-4 px-lg-5 h-100">
						<div class="card-body d-flex flex-column">
							<!--<div class="text-center">-->
							<!--	<img src="#" class="img-fluid  mb-5" alt="Websearch">-->
							<!--</div>-->

							<div class="card-title mb-4 text-center fs-2"><h4>Team Package</h4></div>
							<div class="pricing">
								<ul class="list-unstyled">
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">4-7 Members</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Available Storage 2TB</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Free Hosting</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Free Domains</span>
									</li>
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹15</span>/Months
							</div>
							<div class="text-center"><button type="button" class="btn btncolor">Choose Plan</button>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="margin: auto;">
					<iframe class="igp" width="390" height="248"
						src="https://www.youtube.com/embed/_AkxtN9fh2A?si=1tIO4MgzqMRSTVeF" title="YouTube video player"
						frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<div class="we-are-content">
						<span class="top-title">We are</span>
						<h2>Edit your PDF services specialists we are experts in:</h2>
						<ul>
							<li>
								<i class="bx bx-check"></i>
								Safe water condition
							</li>
							<li>
								<i class="bx bx-check"></i>
								PDF Converter maintenance
							</li>
							<li>
								<i class="bx bx-check"></i>
								Commercial PDF Converter work
							</li>
							<li>
								<i class="bx bx-check"></i>
								CPO licensed with chemical knowledge
							</li>
							<li>
								<i class="bx bx-check"></i>
								We hostall &amp; service salt cell chlorine systems
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="part4 section" style="background: #e2e2e2;">
		<div class="t-container">
			<h2>How to compress PDF online?</h2>
			<div class="step-content style2">
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon1.svg"
							alt="upload pdf files">
					</div>
					<div class="bottom bt-1">
						<h4><span>Step 01.</span> Choose PDF files</h4>
						<div class="text"> Select and upload your PDF documents.</div>
					</div>
				</div>
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon2.svg"
							alt="compress pdf files online">
					</div>
					<div class="bottom bt-2">
						<h4><span>Step 02.</span> Compress PDF</h4>
						<div class="text">Choose your desired compression level, then press "Compress". </div>
					</div>
				</div>
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon3.svg"
							alt="download compressed pdf">
					</div>
					<div class="bottom bt-3">
						<h4><span>Step 03.</span> Download PDF</h4>
						<div class="text">Once completed, download your compressed file.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PREMIUM SECTION -->
	<div class="premium">
		<section class="premium-sec">
			<div class="prem contain">
				<div class="pre-column">
					<h2>Top free tool and extension to <br />radiply grow you business</h2>
					<p>The PDF software trusted by millions of users
						PDF CONverter is your number one web app for editing PDF with ease. Enjoy all the tools you
						need to work
						efficiently with your digital documents while keeping your data safe and secure.
						Complete projects faster with batch file processing, convert scanned documents with OCR and
						e-sign your
						business agreements.</p>
				</div>
				<div class="pre-column">
					<img src="{{ asset('frontend/img/main-img/hero.png') }}" alt="heroImg" class="pre_img" />
				</div>
			</div>
			<img src="{{ asset('frontend/img/main-img/bg-bottom-hero.png') }}" alt="" class="curveImg" />
		</section>
	</div>

	<section class="faq-area white-bg ptb-100" style="background: #e2e2e2;">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="faq-accordion">
						<div class="faq-title">
							<h2>Frequently asked questions</h2>
							<span>Just find your answers below</span>
						</div>

						<ul class="accordion">
							<li class="accordion-item">
								<a class="accordion-title active" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									Which type of PDF Converter services do you offer?
								</a>

								<div class="accordion-content show">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									What is PDF Converter automation?
								</a>

								<div class="accordion-content">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									How long should my filter run each day?
								</a>

								<div class="accordion-content">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									Why do I need to remove text from the PDF Converter?
								</a>

								<div class="accordion-content">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									How does well water affect my chemical balance?
								</a>

								<div class="accordion-content">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									Do I have to cover my PDF Converter when it rains?
								</a>

								<div class="accordion-content">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
										quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
										placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
										dolor sit amet consectetur.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="faq-img">
						<img src="{{ asset('frontend/img/main-img/faq-img.png') }}" alt="Image">
					</div>
				</div>
			</div>
		</div>

		<div class="shape faq-shape-1">
			<img src="{{ asset('frontend/img/main-img/faq-shape-1.png') }}" alt="Image">
		</div>
		<div class="shape faq-shape-2">
			<img src="{{ asset('frontend/img/main-img/faq-shape-2.png') }}" alt="Image">
		</div>
	</section>

	<section class="we-are-area pt-100 pb-70">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="we-are-content">
						<span class="top-title">We are</span>
						<h2>PDF Converter services specialists we are experts in:</h2>

						<ul>
							<li>
								<i class="bx bx-check"></i>
								 condition
							</li>
							<li>
								<i class="bx bx-check"></i>
								PDF Converter maintenance
							</li>
							<li>
								<i class="bx bx-check"></i>
								Commercial PDF Converter work
							</li>
							<li>
								<i class="bx bx-check"></i>
								CPO licensed with chemical knowledge
							</li>
							<li>
								<i class="bx bx-check"></i>
								Renovations and refurbishment
							</li>
							<li>
								<i class="bx bx-check"></i>
								Leak detection
							</li>
							<li>
								<i class="bx bx-check"></i>
								Water chemical balancing
							</li>
							<li>
								<i class="bx bx-check"></i>
								We hostall &amp; service salt cell chlorine systems
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6">
					<form class="we-area-form">
						<div class="we-area-title">
							<h2>Get a free quote!</h2>
						</div>

						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="First-Name" placeholder="Name">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" id="Email" placeholder="Email">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="Number" placeholder="Phone number">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<select style="display: none;">
										<option value="1">Select your services</option>
										<option value="2">PDF Converter Services</option>
										<option value="3">Food Services</option>
										<option value="4">Swimming Services</option>
										<option value="5">Water Services</option>
									</select>
									<div class="nice-select" tabindex="0"><span class="current">Select your
											services</span>
										<ul class="list">
											<li data-value="1" class="option selected">Select your services</li>
											<li data-value="2" class="option">PDF Converter Services</li>
											<li data-value="3" class="option">PDF Converter Services</li>
											<li data-value="4" class="option">Swimming Services</li>
											<li data-value="5" class="option">Water Services</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="message" class="form-control" id="Message" cols="30" rows="5"
										placeholder="Message"></textarea>
								</div>
							</div>
						</div>

						<button type="submit" class="default-btn">
							<span>Send message</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
