{{-- The default top navigation bar --}}
<nav class="navbar navbar-custom navbar-expand-lg fixed-top shadow-sm mb-5">
    <a class="navbar-brand sl-logo" href="/"><img src="/assets/images/stem-loyola.png" height="48" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sl-topnav" aria-controls="sl-topnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="sl-topnav" class="navbar-collapse collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link sl-brand" href="#"><span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('about.about') }}"><h5>About Us</h5></a></li>
        </ul>
    </div>
</nav>