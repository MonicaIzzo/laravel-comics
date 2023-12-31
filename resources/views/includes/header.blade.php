@php
    $links = config('header_links');
@endphp


<header>
    <div class="header-top">
        <div class="content">
            <div class="text">DC POWER VISA</div>
            <div class="text">ADDITIONAL DC SITE</div>
        </div>


    </div>
    <!-- MENU statico -->
    <!-- <nav class="container">
        <img class="logo" src={{ Vite::asset('resources/img/dc-logo.png') }} alt="Logo DC">
        </div>
        <div>
            <ul>
                <li><a href={{ route('characters') }} class="" alt="">CHARACTERS</a></li>
                <li><a href={{ route('comics') }} class="" alt="">COMICS</a></li>
                <li><a href={{ route('movies') }} class="" alt="">MOVIES</a></li>
                <li><a href={{ route('tv') }} class="" alt="">TV</a></li>
                <li><a href={{ route('games') }} class="" alt="">GAMES</a></li>
                <li><a href={{ route('collectibles') }} class="" alt="">COLLECTIBLES</a></li>
                <li><a href={{ route('videos') }} class="" alt="">VIDEOS</a></li>
                <li><a href={{ route('fans') }} class="" alt="">FANS</a></li>
                <li><a href={{ route('news') }} class="" alt="">NEWS</a></li>
                <li><a href={{ route('shop') }} class="" alt="">SHOP</a></li>
            </ul>
        </div>
    </nav> -->
    <!-- MENU dinamico -->
    <nav class="container">
        <img class="logo" src={{ Vite::asset('resources/img/dc-logo.png') }} alt="Logo DC">
        </div>
        <div>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ route($link['route']) }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
