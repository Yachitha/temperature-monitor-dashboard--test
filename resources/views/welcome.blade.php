<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Plant 1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background: url("/img/3.jpg") no-repeat center center fixed;
                color: #282e28;
                font-family: 'Berlin Sans FB Demi', sans-serif;
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
                align-items: center;
                display: block;
                margin-top: 80px;
            }

            /*.title {*/
                /*font-size: 84px;*/
            /*}*/

            .links > a {
                color: #636b6f;
                padding: 4px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /*.m-b-md {*/
                /*margin-bottom: 30px;*/
            /*}*/
        </style>
    </head>
    <body>
        <div class="text-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-outline-dark" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-outline-dark" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="container text-center content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card bg-light">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.71);">
                                <i class="fa fa-5x fa-thermometer-half" style="color: rgb(255,255,255); padding: 50px 0;"></i>
                                <div class="card-text">
                                    <p style="font-weight: bold; color: #ffffff; font-size: 15px; text-shadow: 1px 0px #6e786e;">TEMPERATURE</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <p style="font-size: 30px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">44.95 °C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-2 ml-auto">
                        <div class="card bg-light">
                            <div class="card-title" style="background-color: rgba(22,148,25,0.79);">
                                <i class="fa fa-5x fa-tint" style="color: rgb(255,255,255); padding: 50px 0;"></i>
                                <div class="card-text">
                                    <p style="font-weight: bold; color: #ffffff; font-size: 15px; text-shadow: 1px 0px #6e786e;">HUMIDITY</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <p style="font-size: 30px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">46.35 %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="offset-1 col-md-1">
                        <div class="card">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.79);">
                                <i class="fa fa-bolt" style="color: rgb(255,255,255); padding: 10px 0;"></i>
                                <div class="card-text" >
                                    <p style="font-weight: bold; color: #ffffff; font-size: 12px; text-shadow: 1px 0px #6e786e;">RELAY 1</p>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: rgba(22,148,25,0.79);">
                                <div class="card-text">
                                    <p style="font-size: 12px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">ON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 offset-1">
                        <div class="card">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.79);">
                                <i class="fa fa-bolt" style="color: rgb(255,255,255); padding: 10px 0;"></i>
                                <div class="card-text" >
                                    <p style="font-weight: bold; color: #ffffff; font-size: 12px; text-shadow: 1px 0px #6e786e;">RELAY 1</p>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: rgba(22,148,25,0.79);">
                                <div class="card-text">
                                    <p style="font-size: 12px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">ON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 offset-1">
                        <div class="card">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.79);">
                                <i class="fa fa-bolt" style="color: rgb(255,255,255); padding: 10px 0;"></i>
                                <div class="card-text" >
                                    <p style="font-weight: bold; color: #ffffff; font-size: 12px; text-shadow: 1px 0px #6e786e;">RELAY 1</p>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: rgba(22,148,25,0.79);">
                                <div class="card-text">
                                    <p style="font-size: 12px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">ON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 offset-1">
                        <div class="card">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.79);">
                                <i class="fa fa-bolt" style="color: rgb(255,255,255); padding: 10px 0;"></i>
                                <div class="card-text" >
                                    <p style="font-weight: bold; color: #ffffff; font-size: 12px; text-shadow: 1px 0px #6e786e;">RELAY 1</p>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: rgba(22,148,25,0.79);">
                                <div class="card-text">
                                    <p style="font-size: 12px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">ON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 offset-1">
                        <div class="card">
                            <div class="card-title" style="background-color: rgba(255,103,97,0.79);">
                                <i class="fa fa-bolt" style="color: rgb(255,255,255); padding: 10px 0;"></i>
                                <div class="card-text" >
                                    <p style="font-weight: bold; color: #ffffff; font-size: 12px; text-shadow: 1px 0px #6e786e;">RELAY 1</p>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: rgba(22,148,25,0.79);">
                                <div class="card-text">
                                    <p style="font-size: 12px; font-weight: bold; color: #181d18; text-shadow: 1px 0px #454d45;">ON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
