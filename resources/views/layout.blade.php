<!DOCTYPE html>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

        <title>Document</title>

        <style>
            body {
                margin: 0px;
            }

            header {
                width: 100%;
                background-color: black;
                color: white;
            }

            h1 {
                margin: 0px;
            }

            h2, h5 {
                text-align: center;
            }

            p, strong {
                font-size: 17px;
            }

            a {
                margin: 5px;
            }

            #about {
                max-width: 590px;
                margin: 0 auto;
            }

            #canvas {
                width: 250px;
                height: 250px;
                margin: 0 auto;
                border: 7px solid black;
                border-radius: 25px;
            }

            .nav-item {
                text-align: right;
                margin: 0px;
            }

            .container {
                max-width: 960px;
                margin: 0 auto;
                padding: 20px;
            }   

            .code-block {
                font-family: monospace;
            }

            .indent-one {
                text-indent: 30px;
            }

            .indent-two {
                text-indent: 60px;
            }

            .item-wrapper {
                width: 100%;
            }

            .item-container {
                width: 31%;
                float: left;
                padding: 1%;
            }

            .color-item {
                width: 100%;
                margin: 5px;
                padding: 5px;
                border-radius: 5px;
                font-size: 20px;
            }

            @media only screen and (max-width: 576px){
                .color-item {
                    font-size: 15px;
                }
            }

        </style>

    </head>

    <body>

        <header>
            <div class="container">
                <h1><a style="color:white;text-decoration:none" href="/">Color Survey</a></h1>
                <h3 class="nav-item"><a style="color:white" href="/">Survey</a><a style="color:white" href="/about">About</a></h3>

            </div>
        </header>

        <div class="container">
            @yield('about')
            @yield('survey')
        </div>

        
        <script>

            $( document ).ready(function() {
                getCount();
                genNewNums();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let r, g, b, rgb;
            let uid = Math.floor(Math.random() * 900000) + 100000;

            $(".color-item").click(function(e){
                e.preventDefault();
                var label = ($(this).attr("value"));
                $.ajax({
                    type:'POST',
                    url:'/ajaxRequest',
                    data:{uid:uid, label:label, r:r, g:g, b:b},
                    success:function(data){
                        $("#entries").empty();
                        $("#entries").text(data.success);
                        genNewNums();
                    }
                });
            });

            genRamNum = () => {
                let ramNum = Math.floor(Math.random() * 255) + 1;
                return ramNum.toString();
            }

            genNewNums = () => {
                r = genRamNum();
                g = genRamNum();
                b = genRamNum();
                rgb = "rgb(" + r + ", " + g + ", " + b + ")";
                document.getElementById("canvas").style.backgroundColor = rgb;
            }

            getCount = () => {
                $.get("/entries", function(data) {
                    document.getElementById("entries").innerHTML = data.success;
                })
            }    

        </script>
        
    </body>

</html>