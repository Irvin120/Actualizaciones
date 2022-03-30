<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SITE</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    <!-- CSS -->
    @if( Request::path() == '/' )
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">
    @endif

    @if( Request::path() == 'login')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
    @endif

    @if( Request::path() == 'register' )
        <link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
    @endif

    @if( Request::path() == 'search' )
        <link rel="stylesheet" href="{{ asset('css/search.css') }}" type="text/css">
    @endif



</head>
<body>

        {{--Yield representa cierta informacion de otro archivo--}}
        @yield('content')

        {{-- Validar si usuario esta registrado o no --}}
        @if (auth()->check())
            {{-- Usuario registrado --}}

        @else
            {{-- Usuario no registrado --}}
        @endif
</body>
</html>
