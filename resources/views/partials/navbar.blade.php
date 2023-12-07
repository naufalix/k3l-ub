<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0 d-none">
  <div class="row g-0 d-none d-lg-flex">
    <div class="col-lg-6 ps-5 text-start">
      <div class="h-100 d-inline-flex align-items-center text-white">
        <span>Follow Us:</span>
        <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
        <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="col-lg-6 text-end">
      <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
        <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
        <span class="fs-5 fw-bold">+012 345 6789</span>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->

<style>
  .navbar{
    background-image: linear-gradient(to right,transparent,transparent,#1F6B3D);
    border-bottom: 1px solid #1F6B3D;
  }
  @media (max-width: 600px) {
    .navbar-brand img {max-width: 230px;}
  }
  @media (min-width: 600px) {
    .navbar-brand img {max-width: 350px;}
  }
</style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-2 px-md-5">
  <a href="../" class="navbar-brand bg-none">
    <img src="/assets/img/logo-k3lub.png" class="fa-1x ms-3">
  </a>
  <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="../" class="nav-item nav-link {{ Request::is('') ? 'active' : '' }}">Home</a>
      <a href="/tentang" class="nav-item nav-link {{ Request::is('tentang') ? 'active' : '' }}">Tentang</a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ Request::is('peraturan*') ? 'active' : '' }}" data-bs-toggle="dropdown">Peraturan</a>
        <div class="dropdown-menu bg-light m-0">
          <a href="/peraturan" class="dropdown-item">Peraturan Rektor tentang K3L</a>
        </div>
      </div>
      <a href="/standar-operasional-prosedur" class="nav-item nav-link {{ Request::is('standar*') ? 'active' : '' }}">SOP</a>
      <a href="/infografis" class="nav-item nav-link {{ Request::is('infografis') ? 'active' : '' }}">Infografis</a>
      <a href="/kontak" class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
      <a href="/files/Simk3ub.apk" class="nav-item nav-link">Aplikasi K3</a>
    </div>
  </div>
</nav>
<!-- Navbar End -->