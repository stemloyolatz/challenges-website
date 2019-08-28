{{-- The About STEM Loyola navigation menu --}}
<nav class="navbar navbar-expand-lg navbar-light sl-about-menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#about-menu" aria-controls="about-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="about-menu">
    <ul class="navbar-nav">
      <li class="nav-item {{ $menu === 'about' ? 'active' : '' }}"><a class="nav-link" href="{{ route('about.about') }}"><span>What is STEM Loyola | Challenges?</span></a></li>
      <li class="nav-item {{ $menu === 'terms' ? 'active' : '' }}"><a class="nav-link" href="{{ route('about.terms') }}"><span>Terms</span></a></li>
      <li class="nav-item {{ $menu === 'privacy' ? 'active' : '' }}"><a class="nav-link" href="{{ route('about.privacy') }}"><span>Privacy</span></a></li>
      <li class="nav-item {{ $menu === 'contacts' ? 'active' : '' }}"><a class="nav-link" href="{{ route('about.contacts') }}"><span>Contact Us</span></a></li>
    </ul>
  </div>
</nav>