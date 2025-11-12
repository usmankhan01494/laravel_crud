<!-- resources/views/admin/layout/sidebar.blade.php -->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
      <img
        src="{{ asset('dist/assets/img/AdminLTELogo.png') }}"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">AdminLTE 4</span>
    </a>
  </div>

  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard 01 <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('categories.index') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p> Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('banners.index') }}" class="nav-link ">
                <i class="nav-icon bi bi-circle"></i>
                <p> Banner</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="{{ route('admin.about.index') }}" class="nav-link ">
                <i class="nav-icon bi bi-circle"></i>
                <p> About</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.testimonial.index') }}" class="nav-link ">
                <i class="nav-icon bi bi-circle"></i>
                <p> Testimonial</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>Widgets</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
