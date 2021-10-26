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

<div id="bottom-p">
    <div id="b-l">
        <h3>Talent</h3>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Art by: </h6>
            </div>
            <div class="p-b">
                <p>prova, prova, prova, prova, prova, prova, prova</p>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Written by: </h6>
            </div>
            <div class="p-b">
                <p>prova, prova, prova, prova, prova, prova, prova</p>
            </div>
        </div>
        <hr>
    </div>

    <div id="b-r">
        <h3>Specs</h3>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>Series: </h6>
            </div>
            <div class="p-b">
                <p>prova, prova, prova, prova</p>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>U.S. Price: </h6>
            </div>
            <div class="p-b">
                <p>prova, prova, prova</p>
            </div>
        </div>
        <hr>
        <div class="ta_b">
            <div class="t-b">
                <h6>On Sale Date: </h6>
            </div>
            <div class="p-b">
                <p>prova, prova, prova,</p>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection