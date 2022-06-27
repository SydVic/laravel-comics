@extends('layouts.app')

@section('title')
  DC Comics | Single Comic
@endsection

@section('main_content')
  <div class="product-top">
    <div class="general-container">
      <div class="advertisement">advertisement</div>
      <div class="comic-info">
        <h1>{{ $comic['title'] }}</h1>
      </div>
      <div class="comic-cta">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, iusto aperiam esse beatae nam necessitatibus architecto voluptate eaque dicta amet vero eius et at recusandae velit debitis neque ducimus cum?</div>
    </div>
  </div>
  <div class="product-bottom">
    <div class="general-container">
      
    </div>
  </div>
@endsection