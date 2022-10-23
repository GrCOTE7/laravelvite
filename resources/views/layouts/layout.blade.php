<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | L9Vite</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.nav')

    <main>
        @yield('main')
    </main>
</body>

</html>
