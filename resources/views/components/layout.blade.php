<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <x-header />
        <h1> Esse é a base do modelo</h1>

        {{ $slot }}

        <x-footer />
    </body>
</html>
