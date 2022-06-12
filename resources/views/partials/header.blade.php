<header>
    <div id="top-header" class="container">
        <h6><a href="">DC℠ POWER VISA&reg;</a></h6>
        <h6><a href="">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></a></h6>
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
                <li>
                    <h5><a href="">SHOP <i class="fa-solid fa-caret-down"></i></a></h5>
                </li>
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