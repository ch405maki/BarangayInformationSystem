<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barangay Information System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/images/landscape.jpg");
                background-position: center center;
                background-size: cover;
                min-height: 100vh;
                overflow: hidden;
                position: absolute;
                width: 100%;
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

            .center {

                
            }
            .center a{
                border-radius: 25px;
                background: #ACDF87;
                display: inline-block;
                vertical-align: middle;
                width:85px;
                height:35px;
                margin-bottom: 10px;
                padding-bottom: 10px;
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
                padding-top: 6%;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
            color: #68BB59
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .button1 {width: 250px;}
        </style>

    </head>
        <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links"></div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Barangay Information System
                    </div>

                    <div class="links">
                        <div class="flex-center">
                            @if (Route::has('login'))
                                <div class="center links">
                                    @if (Auth::check())
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ url('/login') }}">Login</a>
                                        <a href="{{ url('/register') }}">Register</a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
