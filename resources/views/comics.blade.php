@extends('layouts.main')

@section('title', 'comics')

@section('main')

@foreach ($comicsArr as $el)
    <div class="box-dc">
        <img src="{{ $el['thumb'] }}" alt="">
        <h6>{{ $el['title'] }}</h6>
    </div>
@endforeach

<div class="btn-main">
    <button>LOAD MORE</button>
</div>


@endsection