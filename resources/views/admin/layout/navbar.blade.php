<!-- resources/views/admin/layout/navbar.blade.php -->
<nav class="app-header navbar navbar-expand bg-body">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
      <li class="nav-item d-none d-md-block"><a href="{{ route('admin.logout') }}" class="nav-link">Logout</a></li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <!-- Example: Fullscreen Toggle -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display:none"></i>
        </a>
      </li>
      <!-- User Dropdown -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
          <span class="d-none d-md-inline">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <li class="user-header text-bg-primary">
            <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
            <p>Alexander Pierce - Web Developer<br /><small>Member since Nov. 2023</small></p>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
