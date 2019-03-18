{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Resources!',
    'description' => 'This is the resources page!'
);
?>

{{-- Build this page off the base page template --}}
@extends('layouts.default')


{{--
  -- Define the page top bar
  --}}
@section('top-bar')
    @include('partials.default-top-bar')
@stop


{{--
  -- Define the page body
  --}}
@section('body')
<div class="container sl-cont">
  <div class="row  sl-cont">
      <h2 class="sl-ospace-1 sl-center-c">{{ $d_page['title'] }}</h2>
  </div>
  <div class="row sl-contact-us">
    <img src="/assets/images/loading.gif" alt="STEM-Loyola Email" class="sl-ospace-1 img-fluid sl-center-c">                   
  </div>
  <div class="sl-ospace-3 "></div>
  <div class="row">
    <h5 class="sl-center-c">ID: {{ $articleId }}</h5>
  </div>
  <div class="sl-ospace-3"></div>
  <div class="row sl-center-t">
    <p>asdfasdfasdfasf</p>
  </div>
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
