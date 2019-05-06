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
      <div class="row sl-contact-us sl-ospace-2">
          <h2 class="sl-center-c">Connect with us via:</h2>                   
        </div>
      <div class="row sl-contact-us">
        <div class="col-sm sl-center-t sl-ospace-3">
            <h1><a target="_blank" data-toggle="tooltip" title="Subscribe to our YouTube Channel" href="{{ url('https://www.youtube.com/channel/UCOYBKsOzlCC8q4Fr0w7XZMQ') }}"><i class="fab fa-lg fa-youtube sl-link-icon sl-red"></i> </a></h1>
        </div>
        <div class="col-sm sl-center-t sl-ospace-3">
            <h1><a target="_blank" data-toggle="tooltip" title="Follow us on GitHub"href="{{ url('https://github.com/stemloyolatz') }}"><i class="fab fa-lg fa-github sl-link-icon sl-grey"></i> </a></h1>
        </div>
        <div class="col-sm sl-center-t sl-ospace-3">
            <h1><a target="_blank" data-toggle="tooltip" title="Follow us on Twitter" href="{{ url('https://twitter.com/stemloyolatz') }}"><i class="fab fa-lg fa-twitter sl-link-icon"></i> </a></h1>
        </div> 
        <div class="col-sm sl-center-t sl-ospace-3">
            <h1><a target="_blank" data-toggle="tooltip" title="Follow us on Instagram" href="{{ url('https://www.instagram.com/stemloyolatz/') }}"><i class="fab fa-lg fa-instagram sl-link-icon sl-red"></i> </a></h1>
        </div>                    
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
