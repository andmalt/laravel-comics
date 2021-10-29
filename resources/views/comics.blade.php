@extends('layouts.main')

@section('title', 'comics')

@section('main')
<div id="main-m">
    @foreach ($comicsArr as $el)
    
        <div class="box-dc">
            <a href="{{route('comic', ['id'=> $loop->index])}}">
                <img src="{{ $el['thumb'] }}" alt="{{ $el['title'] }}">
                <h6>{{ $el['title'] }}</h6>
            </a>  
        </div>
         
    @endforeach

    <div >
        <button class="btn_main">LOAD MORE</button>
    </div>

</div>



@endsection