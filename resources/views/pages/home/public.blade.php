{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Coming Soon',
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
<div class="container">
<script type="text/javascript">eval(unescape("%6c%64%61%6d%69%37%37%3d%5b%27%25%37%39%25%36%66%25%37%35%25%37%32%25%32%65%25%36%65%25%36%31%25%36%64%25%36%35%27%2c%5b%27%25%36%65%25%36%35%25%37%34%27%2c%27%25%36%35%25%37%38%25%36%31%25%36%64%25%37%30%25%36%63%25%36%35%27%5d%2e%72%65%76%65%72%73%65%28%29%2e%6a%6f%69%6e%28%27%2e%27%29%5d%2e%6a%6f%69%6e%28%27%40%27%29%3b%7a%71%76%63%75%31%38%3d%75%6e%65%73%63%61%70%65%28%6c%64%61%6d%69%37%37%29%3b%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%7a%71%76%63%75%31%38%2e%6c%69%6e%6b%28%27%6d%61%69%27%2b%27%6c%74%6f%3a%27%2b%6c%64%61%6d%69%37%37%29%29%3b"));</script>

</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
