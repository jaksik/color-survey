@extends('layout')
    
@section('survey')
    
    <h2>Color Survey</h2>

    <form method="POST" action="/about">

        {{ csrf_field() }}

        <div id="canvas"></div>
        <p style="text-align:center">Click the button that best describes the color above.</p>
        <p style="text-align:center">Entries so far: <strong><span id="entries"></strong></span>; Goal: <strong>10,000</strong></p>
        <div class="item-wrapper">
            @foreach ($colors as $color)
            <div class="item-container">
                <button name="color-item" class="color-item" value={{ $color }} ><strong>{{ $color }}</strong></button>
            </div>
            @endforeach
        </div>

    </form>
@endsection