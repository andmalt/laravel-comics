@extends('layouts.main')

@section('title', 'comic')
    
@section('main')
{{-- image of comic --}}
<div id="top-im">
    <div id="img-comic">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
</div>
{{-- title and description --}}
<div id="top-p">
    <div id="p-p">
        <h3>{{ $comic['title'] }}</h3>
        <p>{{ $comic['description'] }}</p>
    </div>
    {{-- image adv --}}
    <div id="p-img">
        <img src="{{ asset('images/adva.jpg') }}" alt="image adv">
    </div>
</div>

<div id="bottom-p">
    {{-- Talent Section --}}
    <div id="b-l">
        <h3>Talent</h3>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Art by: </h6>
            </div>
            <div class="p-b">
                <a class="a_l" href="#">
                @foreach ($comic['artists'] as $artist)
                    {{ $artist }},
                @endforeach
                </a>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Written by: </h6>
            </div>
            <div class="p-b">
                <a class="a_l" href="#">
                    @foreach ($comic['writers'] as $writer)
                        {{ $writer }},
                    @endforeach
                </a>
            </div>
        </div>
        <hr>
    </div>
    {{-- Specs section --}}
    <div id="b-r">
        <h3>Specs</h3>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Series: </h6>
            </div>
            <div class="p-b">
                <a class="a_l" href="#">{{$comic['series']}} </a>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>U.S. Price: </h6>
            </div>
            <div class="p-b">
                <p>{{ $comic['price'] }}</p>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>On Sale Date: </h6>
            </div>
            <div class="p-b">
                <p>{{ $comic['sale_date'] }}</p>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection