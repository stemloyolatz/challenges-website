{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Quick Reference Guides and Manuals',
    'description' => 'This is the resources page!'
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
        <p><i>Last updated: 23 March 2019</i></p>
        <p>Please <a target="_blank" href="{{ url('/about/contacts') }}">contact us</a> if you know a great resource that should be in this list.</p>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8 col-lg-6 sl-center-t sl-article-qns">
      <h1 class="">@emojione(':heart_eyes:')</h1>
      <p>This is a living collection of useful quick reference guides, tutorials, manuals and cheat sheets for Python, C, C++, Java, JavaScript, HTML and CSS.</p>
    </div>
  </div>
  <div class="sl-ospace-2"></div>
  <div class="row justify-content-center">
    <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="sl-center-t">
            <th class="align-middle" scope="col">Language</th>
            <th class="align-middle" scope="col">Resource</th>
            <th class="align-middle" scope="col">Type</th>
            <th class="align-middle" scope="col">Download Links / Sources</th>
          </tr>
        </thead>
        <tbody>
          {{-- Python --}}
          <tr>
            <th rowspan="3" class="align-middle" scope="row">Python</th>
            <td class="align-middle">Python 3 Beginner's Reference Cheat Sheet</td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/python/Python-3-Beginner-Reference-Cheat-Sheet.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('http://www.sixthresearcher.com/python-3-reference-cheat-sheet-for-beginners') }}">Source</a>]</td>
          </tr>
          <tr>
            <td class="align-middle">Beginner's Python 3 Tutorial </td>
            <td class="align-middle">Website</td>
            <td class="align-middle"><a target="_blank" href="{{ url('https://www.afterhoursprogramming.com/tutorial/python/introduction-python/') }}">Python Tutorial</a></td>
          </tr>
          <tr>
            <td class="align-middle">Python 3 Turtles Graphics Reference Sheet </td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/python/STEM-Loyola--Python3-Turtle-Reference.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('https://docs.python.org/3/library/turtle.html') }}">Source</a>]</td>
          </tr>

          {{-- C++ --}}
          <tr>
            <th rowspan="3" class="align-middle" scope="row">C++</th>
            <td class="align-middle">Beginner's C++ Cheat Sheet</td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/cpp/Beginners-Cpp-Cheat-Sheet.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('https://www.cheatography.com/jofre-pla/cheat-sheets/c-for-beginners') }}">Source</a>]</td>
          </tr>
          <tr>
            <td class="align-middle">C++ Reference Card</td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/cpp/Cpp-Reference-Card.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('http://www.sixthresearcher.com/python-3-reference-cheat-sheet-for-beginners') }}">Source</a>]</td>
          </tr>
          <tr>
            <td class="align-middle">Beginner's C++ Tutorial</td>
            <td class="align-middle">Website</td>
            <td class="align-middle"><a target="_blank" href="{{ url('https://www.afterhoursprogramming.com/tutorial/cpp/Cpp-Language-Tutorial.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('http://www.cplusplus.com/doc/tutorial') }}">Website</a>]</td>
          </tr>

          {{-- JavaScript --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">JavaScript</th>
            <td class="align-middle">JavaScript Cheat Sheet</td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/javascript/JavaScript-Cheat-Sheet.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('https://websitesetup.org/javascript-cheat-sheet') }}">Source</a>]</td>
          </tr>
          <tr>
            <td class="align-middle">Beginner's JavaScript Tutorial </td>
            <td class="align-middle">Website</td>
            <td class="align-middle"><a target="_blank" href="{{ url('https://www.afterhoursprogramming.com/tutorial/javascript/introduction-javascript') }}">JavaScript Tutorial</a></td>
          </tr>

          {{-- HTML & CSS --}}
          <tr>
            <th rowspan="3" class="align-middle" scope="row">HTML & CSS</th>
            <td class="align-middle">Complete HTML Cheat Sheet</td>
            <td class="align-middle">Sheet</td>
            <td class="align-middle"><a target="_blank" href="{{ url('/assets/references/html-css/The-Complete-HTML-Cheat-Sheet.pdf') }}">PDF</a>, [<a target="_blank" href="{{ url('https://www.hostinger.com/tutorials/html-cheat-sheet') }}">Source</a>]</td>
          </tr>
          <tr>
            <td class="align-middle">Beginner's HTML Tutorial</td>
            <td class="align-middle">Website</td>
            <td class="align-middle"><a target="_blank" href="{{ url('https://www.afterhoursprogramming.com/tutorial/html/introduction-html') }}">HTML Tutorial</a></td>
          </tr>
          <tr>
            <td class="align-middle">Beginner's CSS Tutorial</td>
            <td class="align-middle">Website</td>
            <td class="align-middle"><a target="_blank" href="{{ url('https://www.afterhoursprogramming.com/tutorial/css/introduction-css/') }}">CSS Tutorial</a></td>
          </tr>
          
          {{-- Java --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">Java</th>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"><a target="_blank" href="{{ url('#') }}"></a><a target="_blank" href="{{ url('#') }}"></a></td>
          </tr>
          <tr>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"><a target="_blank" href="{{ url('#') }}"></a></td>
          </tr>

          {{-- C --}}
          <tr>
            <th rowspan="2" class="align-middle" scope="row">C</th>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"><a target="_blank" href="{{ url('#') }}"></a><a target="_blank" href="{{ url('#') }}"></a></td>
          </tr>
          <tr>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"><a target="_blank" href="{{ url('#') }}"></a></td>
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
