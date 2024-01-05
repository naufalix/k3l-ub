@extends('layouts.index')

@section('content')
  
  @include('sections.carousel')

  <!-- Samantha Krida -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-success mb-2">Prosedur Keamanan</p>
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

  <style>
    .news-image{
      aspect-ratio: 16/9;
      object-fit: cover
    }
  </style>

  <!-- Berita terkini -->
  <div id="news" class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2 d-none">BLOG</p>
        <h1 class="display-5 mb-4">Berita Terkini</h1>
      </div>
      <div class="row justify-content-center">

        @foreach ($news as $n)
        <div class="col-12 col-md-4 mb-3">
          <div class="card shadow">
            <img src="/assets/img/news/{{$n->image}}" class="card-img-top news-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$n->titlr}}</h5>
              <p class="card-text">{{substr($n->body,0,170)}}...</p>
              <a href="/berita/{{$n->slug}}" class="btn btn-success">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- Berita terkini -->
  
@endsection