<header>
    <div id="top-header" class="container">
        <h6>DC℠ POWER VISA&reg;</h6>
        <h6>ADDITIONAL DC SITES &#9660;</h6>
    </div>
    <div id="bottom-header" class="container">
        <nav>
            <div id="logo">
                <img src="../images/dc-logo.png" alt="logo">
            </div>
            <ul>
                @foreach ($headerLinks as $link)
                <li>
                    <h5><a href="{{$link['url']}}">{{$link['link']}}</a></h5>
                </li>
                    
                @endforeach
                {{-- <li>
                    <a href="">
                        <h5>CHARACTERS</h5>
                    </a>
                </li> --}}
            </ul>
            <div id="search-bar">
                <input type="text" placeholder="Search" name="search">
                <button><i class="fa fa-search"></i></button>
            </div>
        </nav>
        
    </div>
</header>