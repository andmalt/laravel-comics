@extends('layouts.main')

@section('title', 'comic')
    
@section('main')

<div id="top-im">
    <div id="img-comic">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
</div>
<div id="top-p">
    <div id="p-p">
        <h3>{{ $comic['title'] }}</h3>
        <p>{{ $comic['description'] }}</p>
    </div>
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
                <p>
                    @foreach ($comic['artists'] as $artist)
                        {{ $artist }},
                    @endforeach
                </p>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Written by: </h6>
            </div>
            <div class="p-b">
                <p>
                    @foreach ($comic['writers'] as $writer)
                        {{ $writer }},
                    @endforeach
                </p>
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
                <p>{{$comic['series']}} </p>
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
                <p>{{ strtoupper($comic['sale_date']) }}</p>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection