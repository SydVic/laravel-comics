@extends('layouts.app')

@section('title')
  DC Comics | Comics
@endsection

@section('main_content')
  <section class="comics">
    <div class="general-container">
      @foreach ($comics as $comic)          
        {{-- CARD --}}
        <div class="comic-card">
          <div class="img-wrapper">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </div>
          <div class="title-wrapper">
            <h5 class="comic-title">{{ $comic['series'] }}</h5>
          </div>
        </div>
        {{-- /CARD --}}
      @endforeach
    </div>
  </section>
@endsection