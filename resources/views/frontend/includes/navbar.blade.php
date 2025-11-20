



<!--Mobile navbar-->

<section class="new-mobile-menu">
  <div class="container">
    <div class="row ">
      <div class="col-md-9 col-8">
        <div class="logo">
         <a href="{{ route('home') }}"> <img src="{{ asset('frontend/images/logo-hed.png') }}"></a>
        </div>
      </div>
      <div class="col-md-3 col-4">
        <div class="fs-bar">
          <a id="slide"><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


 
  <div class="sidewarper">
    <div id="slidesection">
      <div class="headerinner">
      <div class="topclose "><a id="slide1" class="white row2"><img src="" class="wh-150"> <i class="fa-times fa fr"></i></a></div>
        <div class="overscroll">
          <div id="sidelinks">
            <ul class="clearfix">
                <li class="dropdown"> <a href="{{ route('home') }}" >Home</a> </li>
                <li class="accordion"><b class="accordion-toggle"><a href="{{ route('about') }}">About Us</a><span><i class="fa fa-angle-down" aria-hidden="true"></i> </span></b> </li>
                <li class="accordion"><b class="accordion-toggle"><a href="{{ route('service') }}">Servicves</a><span><i class="fa fa-angle-down" aria-hidden="true"></i> </span></b></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contect') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>	

	<!--End mobile navbar-->




<!-- navbar start -->


    <nav class="navbar navbar-expand-lg mobile-none" id="myHeader">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('frontend/images/logo-hed.png') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('service') }}">Services</a>
        </li>
        <li class="nav-item">   
            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contect') }}">Contact</a>
        </li>
        
      </ul>
      <button class="button" data-bs-toggle="">Get Quote</button>
      
    </div>
  </div>
</nav>

<!-- #end Navbar -->
