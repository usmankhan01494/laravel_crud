@extends('frontend.layouts.app')

@section('content')


<!--Blog Banner Start-->
<section class="about-banner-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-banner-content text-center">
                    <!-- <img src="images/Banner-1.jpg" alt=""> -->
                    
                        <h2>Our Blog</h2>
                    <ul>
                        <li><a href="{{ route('home') }}"><h6><i class="fa fa-home"></i>Home</h6></a></li>
                        <li>/</li>
                        <li><h5>Our Blog</h5></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section>


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
						<a href="#">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
		
<!--Blog End-->

@endsection