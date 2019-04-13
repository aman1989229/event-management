<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EvePlanner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("img/about.jpg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
                /*filter: blur(1px);
                -webkit-filter: blur(1px); */
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: yellow;
                padding: 0 25px;
                font-size: 23px;
                font-weight: 1000;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <!--  do not touc this stuff -->
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
             

             <!-- yhaa tak touch mt krna -->

            <div class="row">
                <div class="col-sm-6"></div><div class="col-sm-4">
                <div style="color:darkblue; font-weight: 2000; font-size: 22px;">
                    About Us
                </div>
                <div>
                	The best automated event scheduling website for you and everyone you meet.
                	EvePlanner works according to you to automatically check the availability and help you connect with your friends, collegues and clients.
                </div>
                <div style="color:darkblue; font-weight: 2000;">
                    Take ownership of your scheduling experience
                </div>
                <div>
                	You can view your schedules as per your sorting convinience. You can download your events and schedules. Invite people or contacts you want. View, book or delete your schedules.
                </div>
            </div>
        </div>
    </body>
</html>
