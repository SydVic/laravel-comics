@extends('layouts.app')

@section('title')
  DC Comics | {{$comic['series']}}
@endsection

@section('main_content')
<div class="blue"></div>
  <div class="product-top">
    <div class="container-small clearfix">
      <div class="comic-image">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
      </div>
      <div class="advertisement">advertisement</div>
      <div class="comic-info">
        <h1>{{ $comic['title'] }}</h1>
      </div>
      <div class="comic-cta">
        <div class="img-wrapper">
          <img src="{{ asset('images/adv.jpg') }}" alt="advertisement">
        </div>
      </div>
    </div>
  </div>
  <div class="product-bottom">
    <div class="container-small clearfix">
      <div class="talent">
        <h3>Talent</h3>
        <div class="art-by">Art By:</div>
        <div class="artists">
          @foreach ($comic['artists'] as $artist)
            <a href="">
              <span>{{ $artist }},</span>
            </a>
          @endforeach
        </div>
        <div class="art-by">Written By:</div>
        <div class="writers">
          @foreach ($comic['writers'] as $writer)
            <a href="">
              <span>{{ $writer }},</span>
            </a>
          @endforeach
        </div>
      </div>
      <div class="specs">
        <h3>Specs</h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, placeat dolore repudiandae est quisquam dolorem hic doloribus nesciunt ea reiciendis eaque autem nostrum. Itaque illo dignissimos tenetur, sint quam fugiat?
      </div>
    </div>
  </div>
@endsection