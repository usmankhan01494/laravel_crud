




<!--Lets get -->
<section class="letsget-section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-5 col-md-5 col-sm-5">
				<div class="letsget-box text-center">
					<h2>Let’s Get Started Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  ut labore et dolore magna aliqua.</p>
					
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7">
				<div class="letsget-box1  d-flex justify-content-around align-items-center">
					<div class="cont d-flex justify-content-center align-items-center">
						<div class="div "><i class="fa fa-phone"></i></div>
						<div class="div1">
							<a href="#">
								<h2>Call Us  </h2>
								<p>+012 345 67890</p>
							</a>
						</div>
					</div>
					<div class="cont d-flex">
						<div class="div "><i class="fa fa-envelope"></i></div>
						<div class="div1">
							<a href="#">
								<h2>Email Us </h2>
								<p>+012 345 67890</p>
							</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>


<!--footer section-->
<section class="footer-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-box ">
					<img src="{{ asset('/frontend/images/footer-logo.png') }}" class="img-fluid" alt="footer-logo">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul>
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-linkedin"></i></a>	
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-box1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="{{ route('home') }}"><strong>✔</strong>Home</a></li>
						<li><a href="{{ route('about') }}"><strong>✔</strong>About</a></li>
						<li><a href="{{ route('service') }}"><strong>✔</strong>Services</a></li>
						<li><a href="{{ route('blog') }}"><strong>✔</strong>Blog</a></li>
						<li><a href="{{ route('contect') }}"><strong>✔</strong>Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-box1">
					<h3>Contact Info</h3>
					<ul>
						<li>
							<i class="fa fa-map-marker"></i>
							123 Street, City, Country
						</li>
						<li>
							<i class="fa fa-phone"></i>
							+012 345 67890
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							Demo@gmail.com
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-box1">
					<h3>Newsletter</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<form action="">
						<input type="email" class="form-input" placeholder="Your Email">
						<button class="button" type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>






<!-- Footer Start -->
<footer class="footer-section-last">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="ppp">&copy; 2024 All Rights Reserved by Your Company</p>
			</div>
		</div>
	</div>
</footer>

<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="{{ asset('frontend/js/script.js') }}"></script>

</body>
</html>
