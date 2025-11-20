<!DOCTYPE HTML>
<html>
<head>
    <title>Beadandó</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <article>
                @yield('content')
            </article>
        </div>

        <footer id="footer">
            <p>&copy; Beadandó · Dimension by HTML5 UP</p>
        </footer>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
</body>
</html>