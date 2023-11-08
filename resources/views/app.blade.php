<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anderson | Laravel</title>
        @yield('styles')
    </head>
    <body class="antialiased">
        @yield('content')

        @yield('scripts')
    </body>
</html>
