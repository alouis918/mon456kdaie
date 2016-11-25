<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/styleBase.css" rel="stylesheet">

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

            .head-height {
                height: 15vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .block-center{
                align-items: center;
                display: block;
                justify-content: center;
            }
            .full-height{
                height: 85vh;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left{
                position: absolute;
                left: 10px;
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
            .footer{
                position: fixed;
                bottom:2px;
                background-color: #9d9d9d;
                height: 25px;
                width: 100%;
                border: 3px solid blue;
                margin-top: 25px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref head-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{url('/')}}">Welcome</a>
                    <a href="{{url('/contactus')}}">Contact Us</a>
                </div>
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        </div>
        <div>
            @yield("contentHome")
        </div>
        <div class="">

        </div>
        <script src="/js/app.js"></script>
        <script src="/js/jsBase.js"></script>
    </body>
</html>
