<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="favicon.ico">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>
    </head>

    <body style='background-color: white'>
        <div id="app">
        </div>
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
    </body>

</html>