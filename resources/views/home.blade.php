@extends('layouts.index')

@section('content')
  
  @include('sections.carousel')

  <!-- Samantha Krida -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2">Prosedur Keamanan</p>
        <h1 class="display-5 mb-4">Gedung Samantha Krida</h1>
      </div>
      <div class="row content">
        <video class="mx-auto mb-5 col-12 col-lg-10" controls data-aos="fade-up" data-aos-delay="150">
          <source src="/assets/video/profile_1.mp4" type="video/mp4">Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
  <!-- Samantha Krida -->

  <!-- Berita terkini -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2 d-none">BLOG</p>
        <h1 class="display-5 mb-4">Berita Terkini</h1>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="card shadow">
            <img src="/assets/img/news/default.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Berita</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
              <a href="#" class="btn btn-primary">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card shadow">
            <img src="/assets/img/news/default.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Berita</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
              <a href="#" class="btn btn-primary">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card shadow">
            <img src="/assets/img/news/default.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Berita</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
              <a href="#" class="btn btn-primary">Baca selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Berita terkini -->
  
@endsection