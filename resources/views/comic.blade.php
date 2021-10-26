@extends('layouts.main')

@section('title', 'comic')
    
@section('main')

<div id="top-im">
    <div id="img-comic">
        <img src="" alt="">
    </div>
</div>
<div id="top-p">
    <div id="p-p">
        <h3>Action Comic #1000</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque accusantium blanditiis tempore pariatur ab suscipit vitae sunt beatae facere illum eos commodi vel velit nemo cum exercitationem, alias natus sapiente.</p>
    </div>
    <div id="p-img">
        <img src="{{ asset('images/adva.jpg') }}" alt="image adv">
    </div>
</div>

@endsection