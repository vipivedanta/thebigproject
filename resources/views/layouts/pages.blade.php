<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_TITLE') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="tether/css/tether.min.css" />
        <iink rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
    </head>
    <body>
        <div class="flex-center-1 position-ref-1 full-height-1">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                @yield('content')
            </div>
        </div>

        <section class="thp-footer">
            <p class="text text-center tbp-black tbp-footer-text">All rights reservced @theBigProject</p>
        </section>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="tether/js/tether.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>   

    </body>
</html>
