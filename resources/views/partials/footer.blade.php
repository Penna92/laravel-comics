<footer>
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
    <div id="central-footer" class="container">
      <div id="center-left-footer">
        <ul>
            <ul>
              <li><h2>DC COMICS</h2></li>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>
            <ul>
                <li><h2>SHOP</h2></li>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
        </ul>
        <ul>
          <li><h2>DC</h2></li>
          <li><a href="#">Terms Of Use</a></li>
          <li><a href="#">Privacy Policy (Nes)</a></li>
          <li><a href="#">Ad Choices</a></li>
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Talent Workshops</a></li>
          <li><a href="#">CPSC Certificates</a></li>
          <li><a href="#">Ratings</a></li>
          <li><a href="#">Shop Help</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>

        <ul>
          <li><h2>SITES</h2></li>
          <li><a href="#">DC</a></li>
          <li><a href="#">MAD Magazine </a></li>
          <li><a href="#">DC Kids</a></li>
          <li><a href="#">DC Universe</a></li>
          <li><a href="#">DC Power Visa</a></li>
        </ul>
      </div>
      <div id="center-right-footer">
        <img src="../images/dc-logo-bg.png" alt="DC Logo Background" />
      </div>
    </div>
    <div id="bottom-footer" class="container">
      <div id="bottom-left-footer">
        <button>SIGN-UP NOW!</button>
      </div>
      <div id="bottom-right-footer">
        <h4>FOLLOW US</h4>
        <ul>
           @foreach ($socials as $item)
              <li>
                  <a href="{{$item['link']}}"><img src="{{$item['icon']}}" alt="{{$item['name']}}" /></a>
              </li>
          @endforeach
        </ul>
      </div>
    </div>
  </footer>