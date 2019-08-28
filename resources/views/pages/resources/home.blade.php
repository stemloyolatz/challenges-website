{{-- This is the default home page a.k.a landing page for the resources --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Past Challenge',
    'description' => 'This is the past challenges archives page!'
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
      <h2 class="sl-ospace-1 sl-center-c">Coming Soon!</h2>
  </div>
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
