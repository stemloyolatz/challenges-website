{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Contact Us',
    'description' => 'This is the Contacts page!'
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
    <?php $menu = 'contacts'; ?>
    @include('partials.menu-about')
    <div class="container sl-cont">
      <div class="row">
          <h2 class="sl-ospace-1 sl-center-c">{{ $d_page['title'] }}</h2>
      </div>
      <div class="row sl-contact-us">
        <img src="/assets/images/stem-loyola-email.png" alt="STEM-Loyola Email" class="sl-ospace-1 img-fluid sl-center-c">                   
      </div>
      <div class="sl-ospace-3"></div>
    </div>
    
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
  @include('partials.default-footer')
@stop
