{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Archives',
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
      <h2 class="sl-ospace-1 sl-center-c"><strong>{{ $d_page['title'] }}</strong></h2>
  </div>
  <div class="row justify-content-center">
    <div class="col col-sm-12 col-md-8 col-lg-6 sl-center-t">
        <p><i>Last updated: 28 August 2019</i></p>
    </div>
  </div>
  <div class="sl-ospace-2"></div>
  <div class="row  sl-cont">
    <h4 class="sl-ospace-1 sl-center-c"><strong>Challenges</strong></h4>
  </div>
  <div class="row justify-content-center">
    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="sl-center-t">
            <th class="align-middle" scope="col">ID</th>
            <th class="align-middle" scope="col">Level</th>
            <th class="align-middle" scope="col">Title</th>
            <th class="align-middle" scope="col">Solutions</th>
          </tr>
        </thead>
        <tbody>
          {{-- Challenge 01 --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">01</th>
            <td class="align-middle">Novice</td>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-03-A') }}">Greetings</a></td>
            <td class="align-middle">WIP</td>
          </tr>
          <tr>
            <th class="align-middle">Experienced</th>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-03-A') }}">Jane in Trouble</a></td>
            <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A2-solution-cpp.zip') }}">C++</a></td>
          </tr>
          {{-- Challenge 02 --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">02</th>
            <td class="align-middle">Novice</td>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-04-A') }}">Mt. Kilimanjaro</a></td>
            <td class="align-middle">WIP</td>
          </tr>
          <tr>
            <th class="align-middle">Experienced</th>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-04-A') }}">Form Four Results</a></td>
            <td class="align-middle"><a href="{{ url('/assets/challenges/19.04/19.04-A2-solution-cpp.zip') }}">C++</a></td>
          </tr>
          {{-- Challenge 03 --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">03</th>
            <td class="align-middle">Novice</td>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-05-A') }}">Bouncing Ball (Part 1)</a></td>
            <td class="align-middle">WIP</td>
          </tr>
          <tr>
            <th class="align-middle">Experienced</th>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-05-A') }}">Forbidden List of Primes</a></td>
            <td class="align-middle"><a href="{{ url('/assets/challenges/19.05/19.05-A2-solution-cpp.zip') }}">C++</a></td>
          </tr>
          {{-- Challenge 04 --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">04</th>
            <td class="align-middle">Novice</td>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-08-A') }}">Gender Code</a></td>
            <td class="align-middle">WIP</td>
          </tr>
          <tr>
            <th class="align-middle">Experienced</th>
            <td class="align-middle"><a href="{{ url('/archives/challenges/19-08-A') }}">Famous Ward Names</a></td>
            <td class="align-middle"><a href="{{ url('/assets/challenges/19.08/19.08-A2-solution-cpp.zip') }}">C++</a></td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="sl-ospace-2"></div>
  <div class="row  sl-cont">
    <h4 class="sl-ospace-1 sl-center-c"><strong>Projects</strong></h4>
  </div>
  <div class="row justify-content-center">
    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="sl-center-t">
            <th class="align-middle" scope="col">ID</th>
            <th class="align-middle" scope="col">Level</th>
            <th class="align-middle" scope="col">Title</th>
          </tr>
        </thead>
        <tbody>
          {{-- Project 01 --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">01</th>
            <td class="align-middle">Novice</td>
            <td class="align-middle"><a href="{{ url('/archives#') }}">WIP</a></td>
          </tr>
          <tr>
            <th class="align-middle">Experienced</th>
            <td class="align-middle"><a href="{{ url('/archives#') }}">Building a Virus Cleanup Tool</a></td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
    @include('partials.default-footer')
@stop
