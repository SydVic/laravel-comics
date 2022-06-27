{{-- COMIC CARD --}}
<div class="comic-card">
  <a href="{{ route('single-comic', ['id' => $id]) }}">
    <div class="img-wrapper">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
    <div class="title-wrapper">
      <h5 class="comic-title">{{ $comic['series'] }}</h5>
    </div>
  </a>
</div>
{{-- /COMIC CARD --}}