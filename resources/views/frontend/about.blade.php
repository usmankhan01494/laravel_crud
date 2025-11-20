
@extends('frontend.layouts.app')

@section('content')

<!--About Banner-->

<section class="about-banner-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-banner-content text-center">
                    <!-- <img src="images/Banner-1.jpg" alt=""> -->
                    
                        <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ route('home') }}"><h6><i class="fa fa-home"></i>Home</h6></a></li>
                        <li>/</li>
                        <li><h5>About Us</h5></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section>


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
					<button onclick="window.location.href='about.html'" class="button">Read More</button>
				</div>
			</div>
		</div>
		@endforeach
		
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


@endsection