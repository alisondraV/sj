<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="{{ mix('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>SJ's Painting</title>
    </head>
    <body>
        <div id="app">
            <app />
        </div>
    </body>
</html>
