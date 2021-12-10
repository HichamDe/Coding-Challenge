<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/welcome.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">

        <nav class="flex-m">
            YouCan
        </nav>
        <div id="screen">

            @yield("content")

        </div>

    </div>

    <script>
        const screen = document.getElementById('screen');
        let n = window.screen.height - 50 ; // screen height - nav height
        screen.style.height = `${n}px`; // height of the screen Elem

    </script>
</body>
</html>