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
						<h2>Your Ultimate PDF File Converter Solution</h2>
						<p>In today’s fast-paced digital world, efficiency, accuracy, and convenience are key. At EditEvol, we provide an all-in-one solution to your PDF needs, ensuring that you can seamlessly manage, convert, and edit PDF files with ease. Whether you’re a business professional, student, or someone who frequently deals with documents, EditEvol is designed to simplify your workflow and enhance productivity.</p>
						<p>Ready to take control of your PDF files? Sign up for EditEvol today and discover the easiest way to convert, edit, and manage your documents.</p>
						<!--<ul>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		Safe water condition-->
						<!--	</li>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		PDF Converter maintenance-->
						<!--	</li>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		Commercial PDF Converter work-->
						<!--	</li>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		CPO licensed with chemical knowledge-->
						<!--	</li>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		Renovations and refurbishment-->
						<!--	</li>-->
						<!--	<li>-->
						<!--		<i class="bx bx-check"></i>-->
						<!--		Leak detection-->
						<!--	</li>-->
						<!--</ul>-->
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
										<span class="small ms-3">Access to tools</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Limited document processing</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Work on Web</span>
									</li>
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹9</span>/Day
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

							<div class="card-title mb-4 text-center fs-2"><h4>Premium</h4></div>
							<div class="pricing">
								<ul class="list-unstyled">
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Full access to tools</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Unlimited document processing</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Work on Web, Mobile and Desktop</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Customer support</span>
									</li>
									
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹199</span>/Month
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

							<div class="card-title mb-4 text-center fs-2"><h4>Business</h4></div>
							<div class="pricing">
								<ul class="list-unstyled">
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Full access to tools</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Unlimited document processing</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Work on Web, Mobile and Desktop</span>
									</li>
									<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Convert scanned PDF to Word</span>
									</li>
										<li class="mb-3">
										<i class="fas fa-check-circle icon-color"></i>
										<span class="small ms-3">Customer support</span>
									</li>
								</ul>

							</div>
							<div class="text-center mt-auto mb-4">
								<span class="fw-bold fs-2 ">₹1800</span>/Year
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
						<h2>Why Choose EditEvol?</h2>
						<ul>
							<li>
								<i class="bx bx-check"></i>
								<b>Comprehensive PDF Conversion:</b> Our state-of-the-art technology preserves the original formatting and layout, giving you high-quality output every time.
							</li>
							<li>
								<i class="bx bx-check"></i>
							<b>User-Friendly Interface:</b> We understand that not everyone is a tech expert, which is why we’ve designed EditEvol to be incredibly user-friendly. 
							</li>
							<li>
								<i class="bx bx-check"></i>
								<b>Advanced Editing Features:</b> Our platform empowers you to make precise changes, ensuring that your documents are exactly as you need them.

							</li>
							<li>
								<i class="bx bx-check"></i>
						 	<b> Secure and Confidential:</b> You can rest assured that your sensitive information remains confidential, and your documents are safe from unauthorized access.

							</li>
							<!--<li>-->
							<!--	<i class="bx bx-check"></i>-->
							<!--	We hostall &amp; service salt cell chlorine systems-->
							<!--</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="part4 section" style="background: #e2e2e2;">
		<div class="t-container">
			<h2>Upload Your PDF:</h2>
			<p>Click on the “Upload PDF” button, and select the file you want to compress.</p>
			<div class="step-content style2">
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon1.svg"
							alt="upload pdf files">
					</div>
					<div class="bottom bt-1">
						<h6><span>Step 01.</span>Choose Compression Level</h6>
						<p style="
    font-weight: 500;
">Depending on your needs, you can choose the compression level for your PDF.</p>
					</div>
				</div>
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon2.svg"
							alt="compress pdf files online">
					</div>
					<div class="bottom bt-2">
						<h6><span>Step 02.</span>Start Compression</h6>
						<p style="
    font-weight: 500;
">Click on the “Compress” button. The tool will process your file and reduce its size.</p>
					</div>
				</div>
				<div class="step-item">
					<div class="top">
						<img src="https://images.hipdf.com/images2022/product-img/compress-pdf/part4-icon3.svg"
							alt="download compressed pdf">
					</div>
					<div class="bottom bt-3">
						<h6><span>Step 03.</span>Download the Compressed PDF</h6>
					<p style="
    font-weight: 500;
">Once the compression is complete, download the smaller PDF file to your device.
						</p>
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
					<h2>Benefits of Our PDF Conversion Services</h2>
					<p>At EditEvol, we’re dedicated to providing you with a seamless, efficient, and powerful PDF management experience. Our services are designed with your needs in mind, offering a range of benefits that enhance your productivity and simplify your workflow.</p>
					<p>We focus on delivering high-quality conversions that maintain the integrity of your original files, ensuring that your documents look just as intended, no matter the format. With EditEvol, managing your PDFs has never been more straightforward or reliable.</p>
						
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
							<h2>FAQs</h2>
							<!--<span></span>-->
						</div>

						<ul class="accordion">
							<li class="accordion-item">
								<a class="accordion-title active" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									1. What file formats can I convert to and from using EditEvol?
								</a>

								<div class="accordion-content show">
									<p>EditEvol supports a wide range of file formats for conversion to and from PDFs. You can convert documents from Word, Excel, PowerPoint, and other common formats into PDFs, as well as convert PDFs back into various formats. Our platform ensures that your files maintain their original formatting and layout during the conversion process.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
								2. How secure is my data with EditEvol?
								</a>

								<div class="accordion-content">
									<p>Your privacy and data security are our top priorities. EditEvol employs advanced encryption protocols to protect your documents during upload, conversion, and download. We ensure that your files are handled with the utmost confidentiality and are not stored longer than necessary for processing.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									Can 3. I edit my PDF files directly on EditEvol?
								</a>

								<div class="accordion-content">
									<p>Yes, EditEvol provides advanced editing features that allow you to make precise changes to your PDF files. You can modify text, add annotations, and make other adjustments to ensure your documents meet your exact needs. Our user-friendly interface makes it easy to navigate and use these editing tools.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									4. Do I need to install any software to use EditEvol?
								</a>

								<div class="accordion-content">
									<p>No, EditEvol is a web-based platform, which means you do not need to install any software on your device. You can access and use all of our PDF management tools directly through your web browser, making it convenient and accessible from any device with an internet connection.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									5. What are the pricing options for EditEvol?
								</a>

								<div class="accordion-content">
									<p>EditEvol offers a range of affordable pricing plans designed to meet different needs, from individual users to businesses. We provide flexible options to ensure you get the most value from our services. For detailed information on our pricing plans, please visit our pricing page or contact our customer support team for assistance.</p>
								</div>
							</li>

							<!--<li class="accordion-item">-->
							<!--	<a class="accordion-title" href="javascript:void(0)">-->
							<!--		<i class="bx bx-plus"></i>-->
							<!--		Do I have to cover my PDF Converter when it rains?-->
							<!--	</a>-->

							<!--	<div class="accordion-content">-->
							<!--		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis-->
							<!--			quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore-->
							<!--			placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum-->
							<!--			dolor sit amet consectetur.</p>-->
							<!--	</div>-->
							<!--</li>-->
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
						<h2>How EditEvol Stands Out</h2>

						<ul>
							<li>
								<i class="bx bx-check"></i>
								  <b>Fast and Reliable Service:</b> Our platform handles large files and complex conversions quickly, so you can get your work done without delays.
							</li>
							<li>
								<i class="bx bx-check"></i>
							 <b>No Software Installation Required:</b> EditEvol is accessible from any device with an internet connection, making it incredibly convenient.
							</li>
							<li>
								<i class="bx bx-check"></i>
								<b>Affordable Pricing Plans:</b> We offer a range of affordable pricing plans to suit different needs, from individuals to businesses. 
							</li>
							<li>
								<i class="bx bx-check"></i>
								<b>Exceptional Customer Support:</b> At EditEvol, we’re committed to providing exceptional customer support so you can have best possible experience.
							</li>
							<li>
								<i class="bx bx-check"></i>
							<b>Regular Updates and Improvements:</b> With regular updates, you can be sure that you’re always using the most advanced tools available.

							</li>
							<!--<li>-->
							<!--	<i class="bx bx-check"></i>-->
							<!--	Leak detection-->
							<!--</li>-->
							<!--<li>-->
							<!--	<i class="bx bx-check"></i>-->
							<!--	Water chemical balancing-->
							<!--</li>-->
							<!--<li>-->
							<!--	<i class="bx bx-check"></i>-->
							<!--	We hostall &amp; service salt cell chlorine systems-->
							<!--</li>-->
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
