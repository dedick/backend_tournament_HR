<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Best Score</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HRM BO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Score <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/waiting">Waiting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ingame">InGame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inactive">Inactive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('PlayerController@create')}}">New player</a>
                </li>

            </ul>
        </div>
    </nav>


    @yield('content')
    </body>
</html>

