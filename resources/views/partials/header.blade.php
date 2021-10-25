<header>
    <div id="img-logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="logo DC"></a>
    </div>

    <nav id="nav-h">
        <ul>
            @foreach ($links as $link)
                <li><a class="{{ request()->routeIs($link['route']) }}" href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
            @endforeach
        </ul>
    </nav>
      
  </header>