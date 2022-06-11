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