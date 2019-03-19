{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Challenge #1',
    'description' => 'This is the Home page!'
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
  <div class="row sl-cont">
      <h2 class="sl-ospace-1 sl-center-c">{{ $d_page['title'] }}</h2>
  </div>
  <div class="row  sl-cont">
      <h5 id="count-down" class="sl-ospace-1 sl-center-c">.</h5>
  </div>
  <div class="sl-ospace-3 "></div>
  <div class="row">
    <div class="col-sm sl-center-t sl-ospace-1 sl-challenge-left">
        <h3><i class="fas fa-caret-right"></i> For the Novice</h3>
        <h4 class="sl-ospace-1"><b>Greetings</b></h4>
        <p class="summary"><i>Create your very first program and use it to tell us few things about yourself!</i></p>
        <h5><i class="fas fa-lg fa-file-code"></i> Download Resources for:</h5>
        <p><b><a href="{{ url('/assets/challenges/19.03/19.03-A1-python.zip') }}">Python from here!</a></b> (recommended for all beginners)</p>
        <p><b><a href="{{ url('/assets/challenges/19.03/19.03-A1-cpp.zip') }}">C++ from here!</a></b> (recommended for Form Five students planning to take optional Computer Science)</p>
    </div>
    <div class="col-sm sl-center-t sl-ospace-1 sl-challenge-right">
        <h3><i class="fas fa-caret-right"></i> For the Experienced</h3>
        <h4 class="sl-ospace-1"><b>Jane in Trouble</b></h4>
        <p class="summary"><i>Jane has written a program to help her complete her Maths homework quickly. Unfortunately, she is facing some few issues with the program. Can you help her fix it?</i></p>
        <h5><i class="fas fa-lg fa-file-code"></i> Download Resources for:</h5>
        <p><b><a href="{{ url('/assets/challenges/19.03/19.03-A2-cpp.zip') }}">C++ from here!</a></b></p>
        <p><b><a href="{{ url('/assets/challenges/19.03/19.03-A2-python.zip') }}">Python from here!</a></b></p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm sl-center-t sl-ospace-3">
      <h5><strong><i class="fas fa-lg fa-cloud-upload-alt"></i> Solution Submission:</strong></h5>
      <p><b><a href="{{ url('/about/contacts') }}">Email us your solution</a></b></p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm sl-center-t sl-ospace-3">
      <h5><strong>Support Materials for Beginners:</strong></h5>
      <p>Coming Soon!</p>
    </div>
  </div>
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
