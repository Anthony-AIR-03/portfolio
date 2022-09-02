<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    
    @yield('css')
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>