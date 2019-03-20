{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => '503 | Service Unavailable',
    'description' => 'Lako, lako...lako na wenzako...lakini likikupata, lako peke yako'
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
<div class="container sl-center-t sl-cont">
    <h2 class="sl-ospace-1 sl-center-c">{{ $d_page['title'] }}</h2>
    <h1 class="sl-ospace-1">@emojione(':nerd:')</h1>
    <h5 class="sl-ospace-3"><i><i class="fas fa-lg fa-quote-left"></i> {{ $d_page['description'] }} <i class="fas fa-lg fa-quote-right"></i></i></h5>
    <h4>We are doing some maintenance work, please try again later!</h4>
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
