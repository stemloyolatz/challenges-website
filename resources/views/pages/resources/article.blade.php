{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Recommended IDEs',
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
    <div class="col-sm-12 col-md-8 col-lg-6 sl-center-t sl-article-qns">
      <h1 class="">@emojione(':thinking:')</h1>
      <p>What can I use to write my programs?</p>
      <p>How can I run the programs I create?</p>      
    </div>
  </div>
  <div class="sl-ospace-2"></div>
  <div class="row justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-10 sl-article-body">
        <h4>What is an IDE?</h4>
        <p>IDE stands for an Integrated Development Environment. An IDE is an application that contains the necessary tools required to write and test software. Simply, it is the application that you will need to create, test and run your programs.</p>

        <h4>What IDEs Do We Recommend?</h4>
        <p>We recommend the following IDEs depending on the programming language of choice:</p>
        
        <p>
          <ul>
            <li><a href="{{ url('#Python') }}">Python</a></li>
            <li><a href="{{ url('#JavaScript') }}">JavaScript, HTML & CSS</a></li>
            <li><a href="{{ url('#Cpp') }}">C or C++</a></li>
            <li><a href="{{ url('#Java') }}">Java</a></li>
          </ul>
        </p>
        <a name="Python"></a>
        <h4 class="sl-ospace-2">1. <u>Python</u></h4>
        <p>We recommend Thonny IDE (<a target="_blank" href="{{ url('https://thonny.org') }}">Download setup from here</a>)</p>
        <img class="img-fluid" src="/assets/images/ide-thonny.png" alt="Thonny IDE">
<a name="JavaScript"></a>
        <h4 class="sl-ospace-2">2. <u>JavaScript</u></h4>
        <p>We recommend Visual Studio Code (<a target="_blank" href="{{ url('https://code.visualstudio.com/?wt.mc_id=vscom_downloads') }}">Download setup from here</a>)</p>
        <img class="img-fluid" src="/assets/images/ide-vscode.png" alt="Visual Studio Code">
<a name="Cpp"></a>
        <h4 class="sl-ospace-2">3. <u>C or C++</u></h4>
        <p>We recommend CodeBlocks (<a target="_blank" href="{{ url('http://www.codeblocks.org/downloads/26') }}">Download setup from here</a>)</p>
        <img class="img-fluid" src="/assets/images/ide-codeblocks.png" alt="CodeBlocks"><a name="Experienced"></a>
        <a name="Java"></a>
        <h4 class="sl-ospace-2">4. <u>Java</u></h4>
        <p>We recommend Apache Netbeans (<a target="_blank" href="{{ url('https://netbeans.apache.org/download/index.html') }}">Download setup from here</a>)</p>
        <img class="img-fluid" src="/assets/images/ide-netbeans.png" alt="Apache Netbeans"><a name="Experienced"></a>      
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
