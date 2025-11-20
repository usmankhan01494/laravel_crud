@extends('frontend.layouts.app')

@section('content')

<!-- Banner Start -->

<section class="banner-section">    
    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="main-banner">
                    <div class="truch-carousel owl-carousel" role="listbox" >
						@foreach($banners as $banner)
                        <div class="item"> 
                            <img src="{{ asset('uploads/banners/'.$banner->image) }}" alt="banner">
                            <div class="banner-content">
                               <h1>{!! $banner->title !!}</h1>
            					<p>{!! $banner->description !!}</p>
                             	 <button onclick="window.location.href='{{ route('contect') }}'" class="button">Get A Quote</button>
                                <button onclick="window.location.href='{{ route('about') }}'" class="button1"> Read More</button>
                            </div>
                        </div>
						@endforeach
                    </div> 
                </div> 
            </div>
        </div>
    
</section>

<!-- Banner End -->

<!-- Request quote -->

<section class="request-quote">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="request-quote-box">
				<h2>Request A Free Quote</h2>

				<form class=" form-row" method="post" action="{{ route('form.save') }}">
					@csrf

					<div class="form-group">
						<input type="text" class="name-input form-input" name="name" placeholder="Your Name">
						<span class="name-error error-msg"></span>
					</div>

					<div class="form-group">
						<input type="email" class="email-input form-input" name="email" placeholder="Your Email">
						<span class="email-error error-msg"></span>
					</div>

					<div class="form-group">
						<input type="text" class="number-input form-input" name="phone" placeholder="Phone Number">
						<span class="number-error error-msg"></span>
					</div>

					<div class="form-group">
						<input type="date" name="date" class="form-input">
					</div>

					<div class="form-group">
						<input type="text" name="service" class="service-input form-input" placeholder="Service Required">
						<span class="service-error error-msg"></span>
					</div>


					<button class="button" type="submit">Submit Now</button>

				</form>
			</div>


			</div>
		</div>
	</div>
</section>



<!-- Request quote end -->

<!-- About Start  -->

<section class="about-section">	
	<div class="container">
		@foreach ($abouts as $about )
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="about-image">
					<img src="{{ asset('uploads/about/'.$about->image) }}" alt="" height="500">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="about-content">
					<h5>{{ $about->short_description }}</h5>
					<h2>{{ $about->title }}</h2>
					<p>{{ $about->description }}</p>
					<ul>
						<li>
							<strong>✔</strong> Professional & Expert Staff
						</li>
						<li>
							<strong>✔</strong> 24/7 Customer Support
						</li>
						<li>
							<strong>✔</strong> On Time Delivery
						</li>
						<li>
							<strong>✔</strong> Affordable Pricing
						</li>
					</ul>
					<button onclick="window.location.href='{{ route('about') }}'" class="button">Read More</button>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
</section>

<!-- About End  -->

<!-- Services Start -->

<section class="services-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-title text-center">
					<h5>Our Services</h5>
					<h2>What We Provide</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($services as $service)
			<div class="col-lg-4 col-md-6 col-sm-12 mtmmt">
				<div class="service-box">
					<img src="{{ asset('uploads/services/'.$service->image) }}" alt="service-image" class="img-fluid">
					<div class="service-content">
						<h3>{{ $service->title }}</h3>
						<p>{{ $service->description }}</p>
						<a href="{{ route('service') }}">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- Services End -->

<!-- Skills Start -->
<section class="skills-section">
	<div class="container">
		<div class="row justify-content-center align-items-center">

			<div class="col-lg-7 col-md-7 col-sm-12">
				<div class="skills-section">
					<h5>Our Skill</h5>
					<h2>Offer Reliable Services For Most Home Services</h2>
					<p>We offer reliable, professional services covering most home repair, maintenance, and improvement needs efficiently.</p>

					<div class="skill">
					<div class="skill-name">
						<span>Residential carpenters</span>
						<span style="color:#e63946;">85%</span>
					</div>
					<div class="progress-bar">
						<div class="progress" data-width="85%"></div>
					</div>
					</div>

					<div class="skill">
					<div class="skill-name">
						<span>Commercial plumbers</span>
						<span style="color:#e63946;">90%</span>
					</div>
					<div class="progress-bar">
						<div class="progress" data-width="90%"></div>
					</div>
					</div>

					<div class="skill">
					<div class="skill-name">
						<span>Painting Expert</span>
						<span style="color:#e63946;">90%</span>
					</div>
					<div class="progress-bar">
						<div class="progress" data-width="90%"></div>
					</div>
					</div>

					<div class="skill">
					<div class="skill-name">
						<span>Industrial electricians</span>
						<span style="color:#e63946;">95%</span>
					</div>
					<div class="progress-bar">
						<div class="progress" data-width="95%"></div>
					</div>
					</div>
				</div>
					
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="skills-image">
					<img src="{{ asset('/frontend/images/skills.jpg') }}" alt="skills-image" class="img-fluid">
				</div>
			</div>
			
			
		</div>
	</div>
</section>


<!-- Skills End -->

<!-- Testimonial Start -->

<section class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-title text-center">
					<h5>Testimonials</h5>
					<h2>What Our Clients Say</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
				<div class="truchh-carousel owl-carousel" role="listbox" >
					<div class="item">
						@foreach ($testimon as $testimonial)
						
						@endforeach
						<div class="testimon">
							<div class="profile-pic">
								<img src="{{ asset('uploads/testimonials/'.$testimonial->image) }}" alt="Hazy Martrin">
							</div>
							<div class="testimon-box">
								<div class="stars">★★★★★</div>
							<p class="review">
								{{ $testimonial->message }}
							</p>
							<h3>{{ $testimonial->name }}</h3>
							<span class="role">{{ $testimonial->position }}</span>
							</div>
							
						</div>
						
					</div>
					
				</div> 
			</div>
		</div>
	</div>	
</section>

<!-- Testimonial End -->


<!--Blog Start-->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-title text-center">
					<h5>Our Blog</h5>
					<h2>Latest News & Articles</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($blogs as $blog)
			<div class="col-lg-4 col-md-6 col-sm-12 mtmmt">
				<div class="blog-box">
					<img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="blog-image" class="img-fluid">
					<div class="blog-content">
						<h3><a href="#">{{ $blog->title }}</a></h3>
						<p>{{ $blog->description }}</p>
						<a href="{{ route('blog') }}">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
		
<!--Blog End-->


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
