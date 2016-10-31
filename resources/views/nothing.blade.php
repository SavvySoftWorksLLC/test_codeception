<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bordered {
                margin: 1em;
                padding: 0.25em;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <p>Terrible Linking</p>

        <div class="links">
            <a href="http://localhost:8000/jstest">JStest</a>
            <a href="http://localhost:8000/test3">Test3 - Due Something in Vue and Test that Vue did the VueDoo</a>
            <a href="http://localhost:8000/nothing">Muffins and Foctories Oh MY!</a>
        </div>

        <div class="bordered">
            <h3 class="flex-center">Muffin Factory / Codeception Test</h3>
            <h3 class="flex-center">Make nothing then test nothing</h3>
            <div class="flex-center">
                <input class="" name="test_nothing" data-endpoint='/nothing/{{json_encode($nothing)}}'/>
            </div>
            
            <div id="nothingness" class="bordered">
<!-- 
                @if(!empty($nothings))
                    <ul>
                        @foreach($nothings as $nothing) -->
                            {{$nothing}}
                       <!--  @endforeach
                    </ul>
                @else
                    <p>No nothings yet, add nothings asap.</p>
                @endif -->
            </div>
        </div>



    </body>
</html>