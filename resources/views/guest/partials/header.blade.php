<header>
    <div class="container-fluid">
        <div class="row d-flex flex-column">
            <div class="col"></div>
            {{-- top-part --}}
            <div class="col d-flex justify-content-around">
                {{-- logo --}}
                <a class="my-3" href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="dc-logo"></a>
                {{-- navbar --}}
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("characters")}}>CHARACTERS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("comics")}}>COMICS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("movies")}}>MOVIES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("tv")}}>TV</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("games")}}>GAMES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("collectibles")}}>COLLECTIBLES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("videos")}}>VIDEOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("fans")}}>FANS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("news")}}>NEWS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href={{route("shop")}}>SHOP</a>
                          </li>
                        </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</header>