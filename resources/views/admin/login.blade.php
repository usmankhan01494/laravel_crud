


<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Page ::Admin</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Login Page" />
    <meta name="author" content="ColorlibHQ" />
  
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('/login/css/adminlte.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
      
      @endif

      @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>      
      @endif
      <div class="login-logo">
        <a href="#"><b> Login here</a>
      </div>
      
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
		
		
          <p class="login-box-msg">Sign in to start your session</p>
          <form method="post" action="{{ route('admin.authenticate') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
              
            </div>
            @error('email')
                  <div class="text-danger mt-1">{{ $message }}</div>  
              @enderror
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
              
            </div>
            @error('password')
                  <div class="text-danger mt-1">{{ $message }}</div>  
              @enderror
            <!--begin::Row-->
            <div class="row">
            
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" name="login" class="btn btn-primary">Sign In</button>
                </div>
              </div>
               <div class="gap-4">
                  <a href="{{ route('user.register') }}" class="link-secondary text-decoration-none">Create a new Account</a>
                  
                </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
        
          <!-- /.social-auth-links -->
          
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
   
  </body>
  <!--end::Body-->
</html>
