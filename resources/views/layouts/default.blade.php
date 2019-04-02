<!doctype html>
<!-- 

███████╗████████╗███████╗███╗   ███╗    ██╗      ██████╗ ██╗   ██╗ ██████╗ ██╗      █████╗ 
██╔════╝╚══██╔══╝██╔════╝████╗ ████║    ██║     ██╔═══██╗╚██╗ ██╔╝██╔═══██╗██║     ██╔══██╗
███████╗   ██║   █████╗  ██╔████╔██║    ██║     ██║   ██║ ╚████╔╝ ██║   ██║██║     ███████║
╚════██║   ██║   ██╔══╝  ██║╚██╔╝██║    ██║     ██║   ██║  ╚██╔╝  ██║   ██║██║     ██╔══██║
███████║   ██║   ███████╗██║ ╚═╝ ██║    ███████╗╚██████╔╝   ██║   ╚██████╔╝███████╗██║  ██║
╚══════╝   ╚═╝   ╚══════╝╚═╝     ╚═╝    ╚══════╝ ╚═════╝    ╚═╝    ╚═════╝ ╚══════╝╚═╝  ╚═╝

                ███▄    █ ▒█████       ██████ █     █▓█████▄▄▄    ▄▄▄█████▓
                ██ ▀█   █▒██▒  ██▒   ▒██    ▒▓█░ █ ░█▓█   ▒████▄  ▓  ██▒ ▓▒
                ▓██  ▀█ ██▒██░  ██▒   ░ ▓██▄  ▒█░ █ ░█▒███ ▒██  ▀█▄▒ ▓██░ ▒░
                ▓██▒  ▐▌██▒██   ██░     ▒   ██░█░ █ ░█▒▓█  ░██▄▄▄▄█░ ▓██▓ ░ 
                ▒██░   ▓██░ ████▓▒░   ▒██████▒░░██▒██▓░▒████▓█   ▓██▒▒██▒ ░ 
                ░ ▒░   ▒ ▒░ ▒░▒░▒░    ▒ ▒▓▒ ▒ ░ ▓░▒ ▒ ░░ ▒░ ▒▒   ▓▒█░▒ ░░   
                ░ ░░   ░ ▒░ ░ ▒ ▒░    ░ ░▒  ░ ░ ▒ ░ ░  ░ ░  ░▒   ▒▒ ░  ░    
                  ░   ░ ░░ ░ ░ ▒     ░  ░  ░   ░   ░    ░   ░   ▒   ░      
                        ░    ░ ░           ░     ░      ░  ░    ░  ░       
                                                                              
                  ███▄    █ ▒█████       ▄████ ▄▄▄      ██▓███▄    █         
                  ██ ▀█   █▒██▒  ██▒    ██▒ ▀█▒████▄   ▓██▒██ ▀█   █         
                  ▓██  ▀█ ██▒██░  ██▒   ▒██░▄▄▄▒██  ▀█▄ ▒██▓██  ▀█ ██▒        
                  ▓██▒  ▐▌██▒██   ██░   ░▓█  ██░██▄▄▄▄██░██▓██▒  ▐▌██▒        
                  ▒██░   ▓██░ ████▓▒░   ░▒▓███▀▒▓█   ▓██░██▒██░   ▓██░        
                  ░ ▒░   ▒ ▒░ ▒░▒░▒░     ░▒   ▒ ▒▒   ▓▒█░▓ ░ ▒░   ▒ ▒         
                  ░ ░░   ░ ▒░ ░ ▒ ▒░      ░   ░  ▒   ▒▒ ░▒ ░ ░░   ░ ▒░        
                    ░   ░ ░░ ░ ░ ▒     ░ ░   ░  ░   ▒   ▒ ░  ░   ░ ░         
                          ░    ░ ░           ░      ░  ░░          ░             
-->
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
    <meta property="og:image" content="/assets/images/stem-loyola-con.png" />
    <meta property="og:description" content="STEMLoyola Challenges" />
    <meta property="og:site_name" content="STEMLoyola Challenges" />
    
    {{-- Website icons --}}
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    {{--  Vendor and custom styles  --}}
    <link href="/assets/css/app.css?v=0.9" rel="stylesheet" type="text/css" >
  </head>
  <body>
    @yield('top-bar')
    <div class="container">
      @yield('body')
      @yield('footer')

      {{--  Vendor and custom scripts  --}}
      <script src="/assets/js/app.js?v=0.3"></script>

      {{-- Set up Google Analytics --}}
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135436218-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-135436218-1');
      </script>
    </div>
  </body>
</html>