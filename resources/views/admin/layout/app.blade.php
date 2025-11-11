<!-- resources/views/admin/layout/app.blade.php -->
@include('admin.layout.header')

<div class="app-wrapper">
  @include('admin.layout.navbar')
  @include('admin.layout.sidebar')

  <main class="app-main">
    @yield('content')
  </main>

  @include('admin.layout.footer')
</div>
