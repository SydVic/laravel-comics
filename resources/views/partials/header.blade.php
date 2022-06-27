<header>
  {{-- HEADER TOP --}}
  <div class="header-top">
    <div class="general-container">
      <div class="dc-visa">
        DC POWER VISA
      </div>
      <div class="additional-dc">
        ADDITIONAL DC SITES
      </div>
    </div>
  </div>
  {{-- /HEADER TOP --}}

  {{-- HEADER BOTTOM --}}
  <div class="header-bottom">
    <div class="general-container">
      <ul class="header-nav-list">
        <li class= "dc-logo">
          <a href="/">
            <img src="{{ asset('images/dc-logo.png') }}"" alt="dc comics logo">
          </a>
        </li>
        @foreach ($headerMenu as $key => $navItem)
          <li class="{{ Request::route()->getName() === $key ? 'active' : '' }}">
            <a href="/{{ $key }}">
            {{ $navItem }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  {{-- HEADER /BOTTOM --}}
</header>