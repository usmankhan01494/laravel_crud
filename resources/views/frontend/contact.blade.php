@extends('frontend.layouts.app')

@section('content')


<!--Contact Banner Start-->
<section class="about-banner-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-banner-content text-center">
                    <!-- <img src="images/Banner-1.jpg" alt=""> -->
                    
                        <h2>Contact Us</h2>
                    <ul>
                        <li><a href="{{ route('home') }}"><h6><i class="fa fa-home"></i>Home</h6></a></li>
                        <li>/</li>
                        <li><h5>Contact Us</h5></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!--Contact Banner End-->


<!--Contact Us Start-->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-title text-center">
					<h5>Contact Us</h5>
					<h2>Get In Touch With Us</h2>
				</div>
			</div>
		</div>
        <div class="row margin">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box text-center">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Our Location</h3>
                    <p>123 Street, City, Country</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box text-center">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p><a href="#">+012 345 67890</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box text-center">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p><a href="#">Demo@gmail.com</a></p>
                </div>
            </div>
        </div>
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="contact-image">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55974.43608905136!2d77.20366220282668!3d28.737404616341255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc284966f25d%3A0x477cc99414d04083!2sSonia%20Vihar%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1763098083980!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="contact-form">
					<form class=" form-row" method="post" action="{{ route('form.save') }}">
					@csrf

						<input type="text" name="name" class="name-input form-input1" placeholder="Your Name">
						<span class="name-error error-msg"></span>

						<input type="text" name="phone" class="number-input form-input1" placeholder="Phone Number">
						<span class="number-error error-msg"></span>

						<input type="email" name="email" class="email-input form-input1" placeholder="Your Email">
						<span class="email-error error-msg"></span>

						<textarea class="form-input1" name="service" placeholder="Your Message"></textarea>

						<button class="button" type="submit">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact Us End-->

@endsection