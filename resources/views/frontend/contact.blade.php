@extends('frontend.layouts.main')

@section('title', 'Home Page')

@section('frontend.content')

	<section class="we-are-area pt-100 pb-70" style="
    margin-top: 100px;
">
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