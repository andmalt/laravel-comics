<footer>
    <div id="main-footer">
        <div id="navs-f">
            
            <div class="columns">
                <h4>Dc Comics</h4>
                <ul>
                    @foreach ($firstLink as $link)
                    <li> 
                        <a href="{{$link['url']}}"> {{ $link['text']  }} </a>
                    </li>
                    @endforeach
                    
                </ul>
                
                
                <h4>Shops</h4>
                <ul>
                    @foreach ($secondLink['shop'] as $link)
                        <li> 
                            <a href="{{ $link['url'] }}"> {{ $link['text']  }}  </a>
                        </li> 
                    @endforeach
                </ul>
                

            </div>
                
            <div class="columns">
                <h4>Dc</h4>
                <ul>
                    @foreach ($secondLink['therms'] as $link)
                        <li> 
                            <a href="{{ $link['url'] }}"> {{ $link['text']  }}  </a>
                        </li> 
                    @endforeach
                </ul>
                
            </div>

            <div class="columns">
                <h4>Sites</h4>
                <ul>
                    @foreach ($secondLink['sites'] as $link)
                        <li> 
                            <a href="{{ $link['url'] }}"> {{ $link['text']  }}  </a>
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
        
        <div id="img-bg-f">
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="logo DC">
        </div>
    </div>
        

    <div id="footer-bottom">
        <div class="btn-footer">
            <button>SIGN-UP NOW!</button>
        </div>

        <div class="social">
            <h3>FOLLOW US</h3>
            <ul>
                <li><a href="#"><img src="{{asset('images/footer-facebook.png')}}" alt="logo facebook"></a></li>
                <li><a href="#"><img src="{{asset('images/footer-twitter.png')}}" alt="logo twitter"></a></li>
                <li><a href="#"><img src="{{asset('images/footer-youtube.png')}}" alt="logo youtube"></a></li>
                <li><a href="#"><img src="{{asset('images/footer-pinterest.png')}}" alt="logo pinterest"></a></li>
                <li><a href="#"><img src="{{asset('images/footer-periscope.png')}}" alt="logo periscope"></a></li>
            </ul>
        </div>
    </div>
</footer>