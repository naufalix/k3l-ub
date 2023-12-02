@extends('layouts.index')

{{-- @section('hero')
  @include('sections.hero')
@endsection --}}

@section('content')
  @include('sections.carousel')
  @include('sections.about')
  @include('sections.facts')
  @include('sections.features')
  @include('sections.video')
  @include('sections.service')
  @include('sections.project')
  @include('sections.team')
  @include('sections.testimonial')
@endsection