{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'About',
    'description' => 'This is the About BongoHacks page!'
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
    <?php $menu = 'about'; ?>
    @include('partials.menu-about')

    <div class="row">
        <h2 class="sl-ospace-1 sl-center-c">What is <span class="sl"><span class="left">STEM </span><span class="right">Loyola</span></span> | Challenges?</h2>
    </div>
    <div class="row sl-about-stem">
      <img src="/assets/images/stem.png" alt="STEM-Loyola Email" class="sl-ospace-1 img-fluid sl-center-c">                   
    </div>
    <div class="sl-ospace-3"></div>
    <div class="row sl-center-t">
      <p class="sl-center-c">We will let you know!</p>
    </div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
