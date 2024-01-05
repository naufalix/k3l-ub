@extends('layouts.index')

@section('content')

<!-- Page Header Start -->
<div style="height: 50px"></div>
<!-- Page Header End -->

<style>
  body {background-color: #EEEEEE}
  .news-img img {width: 100%; aspect-ratio: 16/9; object-fit: cover}
  .content p {text-align: justify}
</style>

<!-- Berita Start -->
<div class="container">

  <div class="row">
    <div class="col-12 col-md-8">
      <div class="card rounded-1 border-0">
        <div class="news-img">
          <img src="/assets/img/news/{{$news->image}}" alt="" class="img-fluid rounded-1 rounded-bottom">
        </div>
        <div class="card-body">
          <h2 class="title">{{$news->title}}</h2>
          @php
            $date = date_create($news->created_at);
          @endphp
          <div>
            <span class="me-2"><i class="bi bi-person"></i>Admin</span>
            <span>
              <i class="bi bi-clock"></i>
                <time datetime="{{date_format($date,"Y-m-d")}}">{{date_format($date,"d F Y")}}</time>
            </span>
          </div>
          <br>
          <div class="content">
            {!! Illuminate\Support\Str::markdown($news->body) !!}
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Berita End -->

@endsection