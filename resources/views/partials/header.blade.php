<header>
    <div id="img-logo">
        <img src="{{ asset('images/dc-logo.png') }}" alt="logo DC">
    </div>

    <nav id="nav-h">
        <ul>
            @foreach ($links as $link)
            <li><a href="">{{ $link['text'] }}</a></li>
            @endforeach
        </ul>
    </nav>
      
  </header>