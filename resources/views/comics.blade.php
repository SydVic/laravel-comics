@extends('layouts.app')

@section('title')
  DC Comics | Comics
@endsection

@section('main_content')
  <section class="comics">
    <div class="general-container">
      <div class="current-series">
        <h2>current series</h2>
      </div>
      {{-- COMICS SLIDE --}}
      <div class="comics-slide">
        @foreach ($comics as $comic)          
          @include('components.comic-card', $comic)
        @endforeach
      </div>
      {{-- /COMICS SLIDE --}}
    </div>
  </section>
@endsection