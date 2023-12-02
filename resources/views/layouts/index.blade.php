<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
  </head>
  <body>
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
      class="bi bi-arrow-up"></i></a>

      @include('partials.script')
  </body>
</html>