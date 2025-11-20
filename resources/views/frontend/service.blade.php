@extends('frontend.layouts.app')

@section('content')


<!--Services Banner Start-->
<section class="about-banner-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-banner-content text-center">
                    <!-- <img src="images/Banner-1.jpg" alt=""> -->
                    
                        <h2>Our Services</h2>
                    <ul>
                        <li><a href="{{ route('home') }}"><h6><i class="fa fa-home"></i>Home</h6></a></li>
                        <li>/</li>
                        <li><h5>Our Services</h5></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Banner End-->

<!--emergency Service Start-->

<section class="emergency-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="emergency-box text-center">
                    <h5>Emergency Services</h5>
                    <h2>We Are Available 24/7 For Emergency Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    
                        <div class="icon">
                            <img src="{{ asset('frontend/images/ser-01.png') }}"class="img-fluid" alt="">
                        </div>
                        <div class="icon-content">
                            <h3>24/7 Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    <div class="icon">
                        <img src="{{ asset('frontend/images/ser-02.png') }}"class="img-fluid" alt="">
                    </div>
                    <div class="icon-content">
                        <h3>Expert Workers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    <div class="icon">
                        <img src="{{ asset('frontend/images/ser-03.png') }}"class="img-fluid" alt="">
                    </div>
                    <div class="icon-content">
                        <h3>Affordable Price</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    <div class="icon">
                        <img src="{{ asset('frontend/images/ser-04.png') }}"class="img-fluid" alt="">
                    </div>
                    <div class="icon-content">
                        <h3>Timely Delivery</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    <div class="icon">
                        <img src="{{ asset('frontend/images/ser-05.png') }}"class="img-fluid" alt="">
                    </div>
                    <div class="icon-content">
                        <h3>Safety Guaranteed</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="emergency-image d-flex  justify-content-center align-items-center">
                    <div class="icon">
                        <img src="{{ asset('frontend/images/ser-06.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="icon-content">
                        <h3>Worldwide Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>





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
						<a href="service.html">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- Services End -->

@endsection