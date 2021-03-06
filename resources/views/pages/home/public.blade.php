{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Challenge #5',
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
  @include('partials.challenges.19-08-B')
  @include('partials.challenges.support-materials')
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
