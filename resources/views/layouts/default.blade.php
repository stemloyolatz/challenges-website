<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>STEM Loyola Challenges | {!! $d_page['title'] !!}</title>

    <meta name="description" content="" >
    <meta name="author" content="" >
    <meta name="keywords" content="STEM Loyola, STEM, Loyola, High School, Hacks, Tanzania, programming, learning, coding, hacking, tutorials">
    
    {{-- Social Media Tags http://moz.com/blog/meta-data-templates-123 --}}
    {{--} Twitter Card data --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@STEMLoyola">
    <meta name="twitter:title" content="STEM Loyola | {!! $d_page['title'] !!}" />
    <meta name="twitter:description" content="STEMLoyola Challenges" />
    <meta name="twitter:creator" content="@STEMLoyola" />
    {{-- Open Graph data --}}
    <meta property="og:title" content="STEMLoyola | {!! $d_page['title'] !!}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{!! route('home.public') !!}" />
    <meta property="og:image" content="/assets/images/sl-challenges-logo.png" /> {{-- TODO --}}
    <meta property="og:description" content="STEMLoyola Challenges" />
    <meta property="og:site_name" content="STEMLoyola Challenges" />
    {{--  Social Media Tags end --}}
    
    {{-- Website icons --}}
    {{-- TODO --}}
    
    {{--  Vendor and custom styles  --}}
    <link href="/assets/css/app.css?v=0.0.1" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @yield('top-bar')
    @yield('body')
    @yield('footer')

    {{--  Vendor and custom scripts  --}}
    <script src="/assets/js/app.js?v=0.0.1"></script>
    {{-- Set up Google Analytics --}}
    {{-- TODO --}}
  </body>
</html>