@extends('layouts.base')

@section('mainContent')
    <div id="jumbotron"></div>   
    <div id="grid" class="container">
        <div id="card-label">
            <h3>Current Series</h3>
        </div>
        <ul>
        {{-- <li v-for="(item, index) in cards" :key="index">
            <img :src="item.thumb" alt="" />
            <h4>{{ item.series }}</h4>
        </li> --}}
        @foreach ($cards as $card)
        <li>
            <img src="{{$card['thumb']}}" alt="{{$card['series']}}" />
            <h4>{{ $card['series'] }}</h4>
        </li>
        @endforeach
        </ul>
    <button>LOAD MORE</button>
  </div>
      <div id="upper-footer" class="container">
    <ul>
      {{-- <li v-for="(item, index) in links" :key="index">
        <img :src="item.icon" :alt="item.description" />
        <a href="#">{{ item.description }}</a>
      </li> --}}
      @foreach ($merch as $item)
          <li>
            <img src="{{$item['icon']}}" alt="{{$item['description']}}" />
            <a href="{{$item['link']}}">{{ $item['description'] }}</a>
          </li>
      @endforeach
    </ul>
  </div>
@endsection