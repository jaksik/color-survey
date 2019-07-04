<!DOCTYPE html>

    <head>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Document</title>

        <style>
            #canvas {
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }

            .button-container {
                width: 301px
            }

            .color-button {
                border-radius: 25px;
                padding: 10px;
                min-width: 100px;
            }
        </style>

    </head>

    <body>

        <h1>Survey Page</h1>

        <form method="POST" action="/about">

            {{ csrf_field() }}

            <div id="canvas"><strong><span id="rgb-value"></span></strong></div>

            <div class="button-container">
                @foreach ($colors as $color)
                    <button name="color-button" class="color-button" value={{ $color }} >{{ $color }}</button>
                @endforeach
            </div>

        </form>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".color-button").click(function(e){
                e.preventDefault();
                var label = ($(this).attr("value"));
                $.ajax({
                    type:'POST',
                    url:'/ajaxRequest',
                    data:{label:label, r:r, g:g, b:b},
                    success:function(data){
                        console.log(data.success);
                        location.reload();
                    }
                });
            });

            genRamNum = () => {
                let ramNum = Math.floor(Math.random() * Math.floor(255));
                return ramNum.toString();
            }
           
            let r = genRamNum();
            let g = genRamNum();
            let b = genRamNum();
            let rgb = "rgb(" + r + ", " + g + ", " + b + ")";

            document.getElementById("canvas").style.backgroundColor = rgb;

        </script>
        
    </body>

</html>