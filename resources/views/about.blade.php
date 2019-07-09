@extends('layout')
    
@section('about')

    <h2>About the Color Survey</h2>

    <!-- @foreach ($entries as $entry)
        <h2>{{ $entry->label }}</h2>
    @endforeach -->
    <div id="about">
      
        <div class="indent-one">

            <p class="about-text">Submit entries using the Color Survey to help create data for a machine learning experiment. See how the data is used to train a front-end machine learning model to classify colors at a Denver area meetup in Fall 2019 (check back soon for date and location).</p>
      
        </div>

        <h5>-------------------------------------------------------------------------------------------</h5>
       
        <h2>How it works</h2>

        <p class="indent-one about-text">The survey randomly generates an "R, G, B" value, then displays its corresponding color on the screen. The user will then click the button that best describes the color. The "R, G, B" value and user selected label are logged to a database in a format that looks something like this...</p>

        <div class="code-block about-text">
            surveyData= [</br>
                <div class="indent-one">{</br></div>
                    <div class="indent-two">label: green-ish,</br></div>
                    <div class="indent-two">r: 61,</br></div>
                    <div class="indent-two">g: 106,</br></div>
                    <div class="indent-two">b: 17</br></div>
                <div class="indent-one">},</br></div>
                <div class="indent-one">{</br></div>
                    <div class="indent-two">label: yellow-ish,</br></div>
                    <div class="indent-two">r: 225,</br></div>
                    <div class="indent-two">g: 220,</br></div>
                    <div class="indent-two">b: 21</br></div>
                <div class="indent-one">},</br></div>
                <div class="indent-one">{</br></div>
                    <div class="indent-two">label: pink-ish,</br></div>
                    <div class="indent-two">r: 194,</br></div>
                    <div class="indent-two">g: 34,</br></div>
                    <div class="indent-two">b: 138</br></div>
                <div class="indent-one">}</br></div>
            ]
        </div>
        
        <h5>-------------------------------------------------------------------------------------------</h5>
        
        <div style="text-align:center" class="item-wrapper">
            <div class="item-container">
                <h2>Source Code:</h2>
                <p><a href="https://github.com/jaksik/color-survey" target="_blank">Color Survey Code</a></p>
            </div>

            <div class="item-container">
                <h2>Inspired By:</h2>
                <p><a href="https://thecodingtrain.com/" target="_blank">The Coding Train</a></p>
            </div>

            <div class="item-container">
            <h2>Created By:</h2>
                <p><a href="https://connorjaksik.com" target="_blank">Connor Jaksik</a></p>
           </div>
        </div>

    </div>
    
@endsection