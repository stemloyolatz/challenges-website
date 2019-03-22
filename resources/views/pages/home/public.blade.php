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
        <h3><i class="fas fa-caret-right sl-paint"></i> For the Novice</h3>
        <h4 class="sl-ospace-1"><b>Greetings</b></h4>
        <h1 class="sl-ospace-1">@emojione(':hugging:')</h1>
        <div class="sl-summary">
          <h5>Objective:</h5>
          <p class="sl-ospace-1"><i>Create your very first program and use it to tell us few things about yourself!</i></p>
          <h5>Task:</h5>
          <p class="sl-ospace-1">You are given a program with examples of instructions a computer can understands (download from resources #1 or #2 below). Complete the program so that when it is run, the program will display your school, current year, your full name and the value of Pi.</p>
        </div>
        <h5 class="sl-ospace-1"><i class="fas fa-lg fa-file-code sl-paint"></i> Download Resources for:</h5>
        <div class="sl-ospace-1 "></div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="align-middle" scope="col">#</th>
              <th class="align-middle" scope="col">Programming Language</th>
              <th class="align-middle" scope="col">Resources</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="align-middle" scope="row">1</th>
              <td class="align-middle"><b>Python</b> <i>(recommended for all beginners)</i></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A1-python.zip') }}">download</a></td>
            </tr>
            <tr>
              <th class="align-middle" scope="row">2</th>
              <td class="align-middle"><b>C++</b> <i>(recommended for Form Five students planning to take optional Computer Science)</i></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A1-cpp.zip') }}">download</a></td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="col-sm sl-center-t sl-ospace-1 sl-challenge-right">
        <h3><i class="fas fa-caret-right sl-paint"></i> For the Experienced</h3>
        <h4 class="sl-ospace-1"><b>Jane in Trouble</b></h4>
        <h1 class="sl-ospace-1">@emojione(':cry:')</h1>
        <div class="sl-summary">
          <h5>Objective:</h5>
          <p class="sl-ospace-1"><i>Jane has written a program to help her complete her Maths homework quickly. Unfortunately, she is facing some few issues with the program. Can you help her fix it?</i></p>
          <h5>Task:</h5>
          <p class="sl-ospace-1">You are given a file ("numbers.txt") that contains 10,000 numbers. Jane has written a program (included in the downloads) that displays all numbers from the file on the screen. Your task is to improve the program so that when it is run, the program will display ONLY odd numbers and at the end show the total count of even numbers contained in the file.</p>
        </div>        
        <h5 class="sl-ospace-1"><i class="fas fa-lg fa-file-code sl-paint"></i> Download Resources for:</h5>
        <div class="sl-ospace-1 "></div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="align-middle" scope="col">#</th>
              <th class="align-middle" scope="col">Programming Language</th>
              <th class="align-middle" scope="col">Resources</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="align-middle" scope="row">1</th>
              <td class="align-middle"><b>C</b></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A2-c.zip') }}">download</a></td>
            </tr>
            <tr>
              <th class="align-middle" scope="row">2</th>
              <td class="align-middle"><b>C++</b></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A2-cpp.zip') }}">download</a></td>
            </tr>
            <tr>
              <th class="align-middle" scope="row">3</th>
              <td class="align-middle"><b>Java</b></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A2-java.zip') }}">download</a></td>
            </tr>
            <tr>
              <th class="align-middle" scope="row">4</th>
              <td class="align-middle"><b>Python</b></td>
              <td class="align-middle"><a href="{{ url('/assets/challenges/19.03/19.03-A2-python.zip') }}">download</a></td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
  <div class="row">
    <div class="col-sm sl-center-t sl-ospace-3">
      <h5><strong><i class="fas fa-lg fa-cloud-upload-alt"></i> Solution Submission:</strong></h5>
      <p><b><a href="{{ url('/about/contacts') }}">Email us your solution</a></b></p>
    </div>
  </div>
  <div class="row justify-content-center ">
    <div class="col-sm-12 col-md-9 col-lg-7 sl-ospace-3">
      <h5 class="sl-center-t"><strong>Support Materials for the Challenge:</strong></h5>
      <p>
        <ul>
          <li><a href="{{ url('/article/recommended-ides') }}">Recommended IDEs</a> (What you need to create and run your programs)</li>
          <li>More coming soon!</li>
        </ul>
      </p>
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
