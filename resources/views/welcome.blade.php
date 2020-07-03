<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <title>Niagahoster</title>
    </head>

    <body style='background-color: white'>
        <div id="app">
        </div>
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
    </body>

</html>