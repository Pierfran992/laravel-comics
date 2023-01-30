<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{Vite :: asset('/resources/img/favicon.ico')}}" type="image/ico">
    @vite('resources/js/app.js')
    <title>Laravel Comics</title>
</head>
<body>
    {{-- includo il file contenente l'header della pagina --}}
    @include('components.header')
    {{-- includo il file contenente il jumbotron --}}
    @include('components.jumbo')

    {{-- richiamo il contenuto dei file home o product --}}
    @yield('content')

    {{-- includo il file contenente il footer della pagina --}}
    @include('components.footer')
</body>
</html>