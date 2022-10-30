<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | L9Vite</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    @yield('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.nav')

    <main>
        <div class="container">
            @yield('main')
        </div>
    </main>
</body>

</html>
